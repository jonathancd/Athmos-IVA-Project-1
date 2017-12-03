Imports System.Net
Public Class Informazioni_Azienda_Ori
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load

    End Sub
    Private Sub CMD_Prosegui_Click(sender As Object, e As EventArgs) Handles CMD_Prosegui.Click
        Dim Mittente As Mail.MailAddress = New Mail.MailAddress(My.Settings.IndMittente, My.Settings.NomeMittente)
        For i As Int16 = 1 To 2
            '1 messaggio per utente
            '2 messaggio per NAos
            Dim MMess As New Mail.MailMessage()
            MMess.From = Mittente
            If i = 1 Then
                MMess.To.Add(Me.TXT_Email_Rif.Text)
            Else
                MMess.To.Add(Mittente)
            End If
            MMess.IsBodyHtml = True
            MMess.Subject = My.Settings.OggettoMail
            Dim Corpo As String = "<h2>Valutazione Hub Tributario</h2><h4>Codice offerta: " & Session("Codice_Offerta") & "</h4><br />"
            'Corpo &= "<div>DENOMINAZIONE SOCIETA': " & Me.TXT_Società.Text & "</div>"
            'Corpo &= "<div>CODICE FISCALE: " & Me.TXT_CodFisc.Text.Trim & "</div>"
            Corpo &= "<div>PROVINCIA SEDE LEGALE: " & Session("ProvSedeLegale") & "</div>"
            Corpo &= "<div>LEGALE RAPPRESENTANTE: " & Me.TXT_Legale_Rappr.Text.Trim & "</div>"
            'Corpo &= "<div>PROCURATORE: " & Me.TXT_Procuratore.Text.Trim & "</div>"
            'Corpo &= "<div>PEC SOCIETA': " & Me.TXT_Pec.Text.Trim & "</div>"
            Corpo &= "<div>N° TELEFONO: " & Me.TXT_Tel.Text.Trim & "</div>"
            Corpo &= "<div>PERSONA DI RIFERIMENTO: " & Me.TXT_Pers_Rif.Text.Trim & "</div><BR>"
            Corpo &= "<div>Sulla base dei dati presenti nella piattaforma HUB TRIBUTARIO la valutazione preliminare, in caso di cessione ad istituti bancari è la seguente </div>"
            Select Case Session("Tipo_Azienza")
                Case "A"
                    Corpo &= "<div>Tipologia azienda: SPA | SRL in normale attività</div>"
                Case "B"
                    Corpo &= "<div>Tipologia azienda: SPA | SRL in liquidazione</div>"
                Case "C"
                    Corpo &= "<div>Tipologia azienda: Curatore Commissario società in liquidazione</div>"
            End Select
            Corpo &= "<div>Ammontare nominale credito IVA a rimborso : " & Format(CDbl(Session("AmmontareIva")), "€ ###,###,###,###.00") & "</div>"
            Corpo &= "<div>Modello IVA rimborso : Iva " & Session("ModelloIva") + 1 & " AI " & Session("ModelloIva") & "</div>"
            Corpo &= "<div>Data richiesta rimborso : " & Session("DataRichiestaRimborso") & "</div>"
            If i = 2 Then Corpo &= "<div>Numero giorni per valutazione : " & Session("Giorni") & "</div>"
            If i = 1 Then
                Corpo &= "<div>Valutazione piattaforma HUB TRIBUTARIO : in fase di verifica</div><br>"
            Else
                Corpo &= "<div>Valutazione piattaforma HUB TRIBUTARIO : " & Format(Session("Valutazione"), "€ ###,###,###,###.00") & "</div><br>"
            End If
            Corpo &= "<div>Verrete contattati a breve da un nostro incaricato.<br>Cordiali saluti<br>HUB Tributario<br>Gruppo Naos Investimenti spa</div>"
            MMess.Body = Corpo
            Dim ServerSmtp As New Mail.SmtpClient(My.Settings.IpServer)
            Dim LoginSmtp As New System.Net.NetworkCredential(My.Settings.LoginMail, My.Settings.PwdMail)
            ServerSmtp.DeliveryMethod = Mail.SmtpDeliveryMethod.Network
            ServerSmtp.Credentials = LoginSmtp
            ServerSmtp.Port = My.Settings.PortaSmtp
            ServerSmtp.Send(MMess)
        Next
        Server.Transfer("Grazie.aspx")
    End Sub

End Class