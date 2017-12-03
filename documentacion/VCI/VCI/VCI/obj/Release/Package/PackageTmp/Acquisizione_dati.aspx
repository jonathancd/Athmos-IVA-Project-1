<%@ Page Title="" Language="vb" AutoEventWireup="false" MasterPageFile="~/Sito.Master" CodeBehind="Acquisizione_dati.aspx.vb" Inherits="VCI.Acquisizione_dati1" %>
<asp:Content ID="Content1" ContentPlaceHolderID="CP1" runat="server">
    <div id="alepagewrap">
    <div class="alewrapper alefullwidth">
        <%Select Case iTiporic%>
        <%Case "A"%>
		    <article class="alecol">SPA | SRL in normale attività</article>
        <%Case "B"%>
		    <article class="alecol">SPA | SRL in liquidazione</article>
        <%Case "C"%>
		    <article class="alecol">Curatore Commissario società in liquidazione</article>
        <%End Select%>
    </div>			
    <h3>Compili i dati per ricevere la valutazione</h3>
<%If iTiporic = "A" Or iTiporic = "B" Then%>
    <div class="alewrapper alegrid2">
		<article class="alecol">Classe di Fatturato Cedente</article>		
		<article class="alecol">
            <asp:DropDownList ID="DDL_Classe_Fatt" runat="server" AutoPostBack="false">
                <asp:ListItem Enabled="true" Value="0" Selected="True" Text="Seleziona il fatturato"></asp:ListItem>
                <asp:ListItem Selected="False" Value="1" Text="0 - 4,9 Milioni € / anno" ></asp:ListItem>
                <asp:ListItem Selected="False" Value="2" Text="5 - 29,9 Milioni € / anno" ></asp:ListItem>
                <asp:ListItem Selected="False" Value="3" Text="30 - 99,9 Milioni € / anno" ></asp:ListItem>
                <asp:ListItem Selected="False" Value="4" Text="> 100 Milioni € / anno" ></asp:ListItem>
            </asp:DropDownList>
        <asp:CompareValidator ID="CV4" runat="server" ErrorMessage="Seleziona il fatturato" ControlToValidate="DDL_Classe_Fatt" Operator="GreaterThan" ValueToCompare="0" ValidationGroup="CheckData" ForeColor="Red"></asp:CompareValidator>
		</article>
    </div>
<%End If%>
<%If iTiporic = "C" Then%>
    <div class="alewrapper alegrid2">
		<article class="alecol">Ammontare del Credito IVA risultante da dichiarazione IVA ex ART.74bis di inizio procedura concorsuale</article>		
		<article class="alecol">
            <asp:DropDownList ID="DDL_TIpo_IMporto" runat="server">
                <asp:ListItem Selected="True" Text="Credito" Value="Credito"></asp:ListItem>
                <asp:ListItem Selected="False" Text="Debito" Value="Debito"></asp:ListItem>
            </asp:DropDownList>&nbsp;&nbsp;
            € <asp:TextBox ID="TXT_Credito" runat="server" MaxLength="12"></asp:TextBox>
            <asp:CompareValidator ID="CV1" runat="server" ErrorMessage="Inserisci un importo" ControlToValidate="TXT_Credito" Operator="DataTypeCheck" Type="Currency" ValidationGroup="CheckData" ForeColor="Red"></asp:CompareValidator>
		</article>
    </div>
<%End If%>
	<div class="alewrapper alegrid2">	
        <article class="alecol">Provincia Sede Legale</article>
		<article class="alecol">
            <asp:DropDownList ID="DDL_Prov_Sede_Legale" runat="server" AppendDataBoundItems="True" DataSourceID="Sql_prov" DataValueField="id_prov" DataTextField="provincia">
                <asp:ListItem Selected="True" Value="0" Text="Seleziona la provincia"></asp:ListItem>
            </asp:DropDownList>
			<asp:SqlDataSource ID="Sql_prov" runat="server" ConnectionString="<%$ ConnectionStrings:ConnVCI %>" SelectCommand="SELECT [id_prov], [provincia] FROM [TB_ANAG_PROVINCE] ORDER BY [provincia]"></asp:SqlDataSource>
            <asp:CompareValidator ID="CV5" runat="server" ErrorMessage="Seleziona la provincia" ControlToValidate="DDL_Prov_Sede_Legale" Operator="GreaterThan" ValueToCompare="0" ValidationGroup="CheckData" ForeColor="Red"></asp:CompareValidator>
		</article>
	</div>
	<div class="alewrapper alegrid2">	
        <article class="alecol">Ammontare Iva richiesta a rimborso</article>	
		<article class="alecol">            
            € <asp:TextBox ID="TXT_Iva_Richiesta" runat="server" MaxLength="12"></asp:TextBox>
            <asp:RequiredFieldValidator ID="rf1" runat="server" ErrorMessage="Inserisci un importo" ControlToValidate="TXT_Iva_Richiesta" ValidationGroup="CheckData" ForeColor="Red" Display="Dynamic"></asp:RequiredFieldValidator>
            <asp:CompareValidator ID="CV6" runat="server" ErrorMessage="Inserisci un importo" ControlToValidate="TXT_Iva_Richiesta" Operator="DataTypeCheck" Type="Double" ValidationGroup="CheckData" ForeColor="Red" Display="Dynamic"></asp:CompareValidator>
        </article>
	</div>
<%If iTiporic = "A" Or iTiporic = "B" Then%>
	<div class="alewrapper alegrid2">
        <article class="alecol">Data richiesta rimborso (gg/mm/aaaa)</article>
		<article class="alecol">
            <asp:TextBox ID="TXT_Data" runat="server" MaxLength="10" Width="90" ></asp:TextBox>
            <asp:RequiredFieldValidator ID="rf2" runat="server" ErrorMessage="Inserisci una data" ControlToValidate="TXT_Data" ValidationGroup="CheckData" ForeColor="Red" Display="Dynamic"></asp:RequiredFieldValidator>
            <asp:CompareValidator  id="dateValidator" runat="server" Type="Date" Operator="DataTypeCheck" ControlToValidate="TXT_Data" ErrorMessage="Formato data non corretto."  ValidationGroup="CheckData"  ForeColor="Red"></asp:CompareValidator>
		</article>
	</div>
<%End If%>	
   	<div class="alewrapper alegrid2">	
    	<article class="alecol">Modello IVA rimborso</article>
		<article class="alecol">
		    <asp:DropDownList ID="DDL_Modello_Iva" runat="server" DataSourceID="SQL_Anno" DataTextField="anno_rimborso_desc" DataValueField="anno_rimborso" AutoPostBack="false" AppendDataBoundItems="true">
                <asp:ListItem Enabled="true" Value="0" Selected="True" Text="Seleziona il modello IVA"></asp:ListItem>
            </asp:DropDownList>
            <asp:SqlDataSource ID="SQL_Anno" runat="server" ConnectionString="<%$ ConnectionStrings:ConnVCI %>" SelectCommand="SELECT [anno_rimborso],anno_rimborso_desc FROM [TB_ANNI_IVA] ORDER BY [anno_rimborso]"></asp:SqlDataSource>
            <asp:CompareValidator ID="CV7" runat="server" ErrorMessage="Seleziona il modello IVA" ControlToValidate="DDL_Modello_Iva" Operator="GreaterThan" ValueToCompare="0" ValidationGroup="CheckData" ForeColor="Red"></asp:CompareValidator>
		</article>
   	</div>
<%If iTiporic = "A" Or iTiporic = "B" Then%>
   	<div class="alewrapper alegrid2">	
    	<article class="alecol">Partita IVA</article>
		<article class="alecol">		    
            <asp:DropDownList ID="DDL_Piva" runat="server" AutoPostBack="false">
                <asp:ListItem Enabled="true" Value="Aperta" Selected="True" Text="Aperta"></asp:ListItem>
                <asp:ListItem Enabled="true" Value="Chiusa" Selected="False" Text="Chiusa"></asp:ListItem>
            </asp:DropDownList>
		</article>
    </div>
<%End If%>
<BR /><BR />
	<div class="alewrapper alefullwidth">
		<article class="alecol"><asp:Button ID="CMD_Prosegui" runat="server" Text="PROSEGUI" ValidationGroup="CheckData"/></article>
	</div>			       
    </div>

</asp:Content>
