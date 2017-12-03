<%@ Page Title="" Language="vb" AutoEventWireup="false" MasterPageFile="~/Sito.Master" CodeBehind="Informazioni_Azienda.aspx.vb" Inherits="VCI.Informazioni_Azienda1" %>
<asp:Content ID="Content1" ContentPlaceHolderID="CP1" runat="server">
    <script type="text/javascript">
        function DisabilitaBottone(bottone) { bottone.value = "Elaborazione in corso, attendere"; bottone.disabled = true;  }
    </script>
    <div id="alepagewrap">
        <h2>Raccolta dati per inoltro richiesta</h2><br /><br />
	    <div class="alewrapper alefullwidth">
		    <article class="alecol">Compila con i tuoi dati Aziendali per procedere con la procedura </article><br /><br /></div>
            <div class="alewrapper alegrid2">
				<article class="alecol">MAIL DI RIFERIMENTO:</article>		
				<article class="alecol">
                    <asp:TextBox ID="TXT_Email_Rif" runat="server"></asp:TextBox>
                    <asp:RequiredFieldValidator Display="Dynamic" ID="RFV3"  ForeColor="Red" runat="server" ErrorMessage="Inserisci la mail di riferimento" ControlToValidate="TXT_Email_Rif"></asp:RequiredFieldValidator>
                    <asp:RegularExpressionValidator ID="regexEmailValid"   ForeColor="Red" runat="server" ValidationExpression="\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" ControlToValidate="TXT_Email_Rif" ErrorMessage="Formato email non valido"></asp:RegularExpressionValidator>
				</article>
                <article class="alecol">N° TELEFONO:</article>		
				<article class="alecol">
                    <asp:TextBox ID="TXT_Tel" runat="server"></asp:TextBox>
                    <asp:RequiredFieldValidator Display="Dynamic" ID="RFV7"  ForeColor="Red" runat="server" ErrorMessage="Inserisci il numero di telefono" ControlToValidate="TXT_Tel"></asp:RequiredFieldValidator>
                    <asp:CompareValidator  id="CV1" runat="server" Type="Integer" Operator="DataTypeCheck" ControlToValidate="TXT_Tel" ErrorMessage="Numero non corretto." ForeColor="Red"></asp:CompareValidator>
				</article>
				<article class="alecol">PERSONA DI RIFERIMENTO:</article>
				<article class="alecol">
                    <asp:TextBox ID="TXT_Pers_Rif" runat="server"></asp:TextBox>
                    <asp:RequiredFieldValidator Display="Dynamic" ID="RFV8" runat="server" ErrorMessage="Inserisci la persona di riferimento" ControlToValidate="TXT_Pers_Rif" ForeColor="Red"></asp:RequiredFieldValidator>
				</article>
			</div>       
            <div class="alewrapper alefullwidth">
    		    <article class="alecol">Cliccando su <asp:Button ID="CMD_Prosegui" runat="server" ForeColor="Red" Text="PROSEGUI" OnClientClick="DisabilitaBottone(this);" UseSubmitBehavior="false"/> riceverai una email con il riepilogo dei dati inseriti.<br />Verrai ricontattato a breve per la conferma della valutazione.</article>
			</div>       
    	</div>
    </div>

</asp:Content>
