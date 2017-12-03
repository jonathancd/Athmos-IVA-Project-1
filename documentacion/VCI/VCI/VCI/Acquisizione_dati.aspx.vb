Public Class Acquisizione_dati1
    Inherits System.Web.UI.Page
    Public iTiporic As String = ""

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        iTiporic = Request("tipologia")
    End Sub

    Private Sub CMD_Prosegui_Click(sender As Object, e As EventArgs) Handles CMD_Prosegui.Click
        Dim Valore As Double = 0
        Dim Giorni As Long = Recupera_Giorni()
        Session("Giorni") = Giorni
        Select Case iTiporic
            Case "A"
                Valore = CDbl(TXT_Iva_Richiesta.Text) * (1 - Giorni / 365 * 0.12)
            Case "B"
                If DDL_Piva.SelectedValue = "Aperta" Then
                    Valore = CDbl(TXT_Iva_Richiesta.Text) * (1 - Giorni / 365 * 0.14)
                Else 'chiusa
                    Valore = CDbl(TXT_Iva_Richiesta.Text) * (1 - (Giorni + 180) / 365 * 0.14)
                End If
            Case "C"
                If DDL_TIpo_IMporto.SelectedValue = "Credito" Then
                    Valore = CDbl(TXT_Iva_Richiesta.Text) - CDbl(TXT_Credito.Text)
                Else
                    Valore = CDbl(TXT_Iva_Richiesta.Text)
                End If
                If DDL_Piva.SelectedValue = "Aperta" Then
                    Valore = Valore * (1 - Giorni / 365 * 0.16)
                Else 'chiusa
                    Valore = Valore * (1 - (Giorni + 180) / 365 * 0.16)
                End If
        End Select
        Session("Valutazione") = Valore
        Session("Tipo_Azienza") = iTiporic
        Session("AmmontareIva") = TXT_Iva_Richiesta.Text
        Session("ModelloIva") = DDL_Modello_Iva.SelectedValue
        Session("DataRichiestaRimborso") = TXT_Data.Text
        Session("ProvSedeLegale") = DDL_Prov_Sede_Legale.SelectedItem.Text
        '****modifica temporanea
        'Server.Transfer("Risultato_Valutazione.aspx")
        Server.Transfer("Informazioni_Azienda.aspx")

    End Sub
    Private Function Recupera_Giorni() As Long
        Dim Tipo As String = ""
        Dim id_pr As Long = 0
        If DDL_Classe_Fatt.SelectedValue < 4 Then
            Tipo = "P"
            id_pr = DDL_Prov_Sede_Legale.SelectedValue
        Else
            Tipo = "R"
            id_pr = Recupera_Dato_Numero("TB_ANAG_PROVINCE", "id_regione", " where id_prov=" & DDL_Prov_Sede_Legale.SelectedValue)
        End If
        Dim anno As Long = 0
        anno = DDL_Modello_Iva.SelectedValue
        Dim campo As String = ""
        Dim ammontare As Double = CDbl(TXT_Iva_Richiesta.Text)
        Select Case ammontare
            Case Is <= 30000
                campo = "z0_30"
            Case Is > 30000, Is <= 100000
                campo = "z30_100"
            Case Is > 100000
                campo = "zoltre100"
        End Select
        Return Recupera_Dato_Numero("TB_TEMPI_MEDI", campo, " WHere anno=" & anno & " and tipo='" & Tipo & "' and id_pr=" & id_pr)
    End Function
    Public Function Recupera_Dato_Numero(ByVal Tabella As String, ByVal campo As String, Optional ByVal where As String = "", Optional ByVal Orderby As String = "", Optional ByVal Procedura_Originale As String = "") As Double
        Dim MioCOmando As String = ""
        Dim Conn As SqlClient.SqlConnection = New SqlClient.SqlConnection(System.Configuration.ConfigurationManager.ConnectionStrings("ConnVCI").ConnectionString)
        Try
            Conn.Open()
            Recupera_Dato_Numero = 0
            Dim Mycomm As New Data.SqlClient.SqlCommand
            Dim MyRead As Data.SqlClient.SqlDataReader
            If Orderby <> "" Then
                MioCOmando = "SELECT " & campo & " from " & Tabella & where & " order by " & Orderby
            Else
                MioCOmando = "SELECT " & campo & " from " & Tabella & where
            End If
            Mycomm.CommandText = MioCOmando
            Mycomm.CommandType = Data.CommandType.Text
            Mycomm.Connection = Conn
            MyRead = Mycomm.ExecuteReader()
            If MyRead.HasRows Then
                If MyRead.Read() Then
                    If IsDBNull(MyRead(0)) Then
                        Recupera_Dato_Numero = 0
                    Else
                        Recupera_Dato_Numero = MyRead(0)
                    End If
                End If
            End If
            MyRead.Close()
            Mycomm.Dispose()
        Catch ex As Exception
            Recupera_Dato_Numero = 0
        Finally
            If Conn.State = ConnectionState.Open Then Conn.Close()
        End Try
    End Function

End Class