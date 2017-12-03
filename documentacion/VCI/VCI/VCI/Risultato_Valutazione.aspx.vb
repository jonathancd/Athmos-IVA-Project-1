Public Class Risultato_Valutazione1
    Inherits System.Web.UI.Page
    Public Codice_Offerta As String = ""
    Public Valutazione As Double = 0
    Public Tipo_Azienda As String = ""
    Public AmmontareIva As Double = 0
    Public ModelloIva As Long = 0
    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If Session("Codice_Offerta") = "" Then
            Codice_Offerta = Format(Now, "yyyyMMHHmm") 'Year(Now).ToString & Month(Now).ToString & Hour(Now).ToString & Minute(Now)
            Session("Codice_Offerta") = Codice_Offerta
        Else
            Codice_Offerta = Session("Codice_Offerta")
        End If
        Valutazione = Session("Valutazione")
        Select Case Session("Tipo_Azienza")
            Case "A"
                Tipo_Azienda = "SPA | SRL in normale attività"
            Case "B"
                Tipo_Azienda = "SPA | SRL in liquidazione"
            Case "C"
                Tipo_Azienda = "Curatore Commissario società in liquidazione"
        End Select
        AmmontareIva = Session("AmmontareIva")
        ModelloIva = Session("ModelloIva")

    End Sub

    Private Sub CMD_Prosegui_Click(sender As Object, e As EventArgs) Handles CMD_Prosegui.Click
        Server.Transfer("Informazioni_Azienda.aspx")
    End Sub
End Class