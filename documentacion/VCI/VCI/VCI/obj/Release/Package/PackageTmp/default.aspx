<%@ Page Title="" Language="vb" AutoEventWireup="false" MasterPageFile="~/Sito.Master" CodeBehind="default.aspx.vb" Inherits="VCI._default" %>
<asp:Content ID="Content1" ContentPlaceHolderID="CP1" runat="server">
        <script type="text/javascript">
            function DisabilitaBottone(bottone) { bottone.disabled = true; bottone.value = "Elaborazione in corso, attendere"; }
    </script>

    <div id="alepagewrap" style="background-image:url(volta.jpg)">
        <h2 style="color:#FFFFFF">Seleziona la tipologia di azienda</h2><br /><br />
        <div class="alewrapper alegrid3" style="background:none" align="center" >
	        <article class="alecol" style="background:none"><a href="Acquisizione_dati.aspx?tipologia=A"><img src="scelta-azienda-normale.png" /></a></article>		
            <article class="alecol" style="background:none"><a href="Acquisizione_dati.aspx?tipologia=B"><img src="scelta-azienda-inliquidazione.png" /></a></article>
            <article class="alecol" style="background:none"><a href="Acquisizione_dati.aspx?tipologia=C"><img src="scelta-azienda-curatore.png" /></a><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></article>
        </div>
    </div>
</asp:Content>
