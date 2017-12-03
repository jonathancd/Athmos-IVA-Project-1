<%@ Page Title="" Language="vb" AutoEventWireup="false" MasterPageFile="~/Sito.Master" CodeBehind="Risultato_Valutazione.aspx.vb" Inherits="VCI.Risultato_Valutazione1" %>
<asp:Content ID="Content1" ContentPlaceHolderID="CP1" runat="server">
    <div id="alepagewrap">
        <h2>Valutazione Hub Tributario</h2><h4>Codice offerta: <%=Codice_Offerta%> </h4><br /><br />
        <div class="alewrapper alefullwidth">
	        <article class="alecol">Sulla base dei dati presenti nella piattaforma HUB TRIBUTARIO la valutazione preliminare, in caso di cessione ad istituti bancari è la seguente </article>
        </div>
        <div class="alewrapper alegrid2">
	        <article class="alecol">Tipologia azienda:</article>		
	        <article class="alecol"><%=Tipo_Azienda%></article>
            <article class="alecol">Ammontare nominale credito IVA a rimborso:</article>		
	        <article class="alecol"><%=Format(AmmontareIva, "€ ###,###,###,###.00")%></article>
	        <article class="alecol">Modello IVA rimborso:</article>
	        <article class="alecol">Iva <%=ModelloIva + 1%> Anno Imposta <%=ModelloIva%></article>
	        <article class="alecol">Valutazione piattaforma HUB TRIBUTARIO:</article>
	        <article class="alecol"><%= Format(Valutazione, "€ ###,###,###,###.00")%></article>
        </div>
        <div class="alewrapper alefullwidth">
		        <article class="alecol">Questa valutazione preliminare al momento non è vincolante nè per il potenziale cedente, nè per la piattaforma HUB TRIBUTARIO.<br />Se ritieni questa valutazione interessante per la tua azienda clicca sul pulsante a fondo pagina e ti indicheremo se la piattaforma HUB TRIBUTARIO ha individuato soggetti bancari interessati all'investimento.</article>
        </div><BR /><BR />
        <div class="alewrapper alefullwidth">
	        <article class="alecol"><h3><asp:Button ID="CMD_Prosegui" runat="server" Text="PROSEGUI" ValidationGroup="CheckData" ForeColor="Red"  /></h3></article>
        </div>
    </div>
</asp:Content>
