
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <style type="text/css">
    @media only screen and (max-width: 480px) {
      table {
        display: block!important;
        width: 100% !important;
      }
      
      td {
        width: 480px !important;
      }
    }
  </style>
</head>

<body style="font-family: 'Malgun Gothic', Arial, sans-serif; margin: 0; padding: 0; width: 100%; -webkit-text-size-adjust: none; -webkit-font-smoothing: antialiased;">

  <!-- <img src="{{url('/images')}}/LOGO_HUB_TRIBUTARIO_JPEG.jpg" style="height: 150px!important;"> -->

  <table width="100%" bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" id="background" style="height: 100% !important; margin: 0; padding: 0; width: 100% !important;">
    <tr>
      <td align="center" valign="top">

        
      <table width="600" border="0" bgcolor="#474544" cellspacing="0" cellpadding="20" id="body_container">
          <tr>
            <td align="center" valign="top" class="body_content">
              <table width="100%" border="0" cellspacing="0" cellpadding="10">
              
                <tr>
                  <td valign="top" style="padding: 0;">
                    <h2 style="color: #FFFFFF; font-size: 22px; margin: 0px; text-align: center;">Valutazione Hub Tributario</h2>
                  </td>
                </tr>

            </table>
          </td>
        </tr>
      </table>

                <!-- // END #header_container -->
                                      <!-- bgcolor="#C7B39A" -->
        <table width="600" border="0" bgcolor="#BB7631" cellspacing="0" cellpadding="20" id="body_container">
          <tr>
            <td align="center" valign="top" class="body_content">
              <table width="100%" border="0" cellspacing="0" cellpadding="20">

                <tr>
                  <td valign="top" style="padding: 0;">
                    <h2 style="color: #FFFFFF; font-size: 22px; text-align: center;">Codice offerta</h2>
                    <p style="color: #FFFFFF; font-size: 14px; line-height: 22px; text-align: center;">{{$email->code}}{{$email->id}}</p>
                  </td>
                </tr>

            </table>
          </td>
        </tr>
      </table>
      <!-- // END #body_container -->
      
      <table width="600" border="0" cellspacing="0" cellpadding="20" id="body_info_container">
        <tr>
          <td align="center" valign="top" class="body_info_content">
            <table width="100%" border="0" cellspacing="0" cellpadding="20">
              <tr>
                <td valign="top">            
                  @if(!empty($rimborso->provincia))
                  <h4 style="margin: 5px;">PROVINCIA SEDE LEGALE: {{$rimborso->provincia->name}}</h4>
                  @endif
                  @if(!empty($data['telephone']))
                  <h4 style="margin: 5px;">N° TELEFONO: {{$data['telephone']}}</h4>
                  @endif
                  @if(!empty($data['name']))
                  <h4 style="margin: 5px;">PERSONA DI RIFERIMENTO: {{$data['name']}}</h4>
                  @endif
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      


      <table width="600" border="0" bgcolor="#F2F2F2" cellspacing="0" cellpadding="20" id="body_item_container">
        <tr>
          <td align="center" valign="top" class="body_item_content">
            <table width="100%" border="0" cellspacing="0" cellpadding="20">
              <tr>
                <td align="center" valign="top">
                  <p style="color: #666666; font-size: 14px; line-height: 22px; text-align: center;">Sulla base dei dati presenti nella piattaforma HUB TRIBUTARIO la valutazione preliminare, in caso di cessione ad istituti bancari è la seguente.</p>
                </td>
              </tr>
              
              <tr>
                <td>
                  <p><strong>Tipologia azienda:</strong> SPA | SRL in normale attività</p>
                  
                  @if(!empty($rimborso))
                    @if($rimborso->type == 1)
                      <p><strong>Ammontare nominale credito IVA a rimborso :</strong> € {{ number_format($rimborso->iva, 2, '.', ',')}}</p>
                      
                      @if($rimborso->type==2)
                        <p><strong>Stato Partita IVA: </strong> </p>
                      @endif

                      <p><strong>Data richiesta rimborso :</strong> {{$rimborso->date}}</p>

                      <p><strong>Numero giorni per valutazione :</strong> {{$rimborso->giorni_rimborso}}</p>
                      <p><strong>Valutazione piattaforma HUB TRIBUTARIO :</strong> € {{number_format($rimborso->evaluation, 2, '.', ',')}} </p>
                    @elseif($rimborso->type == 2)
                      <p><strong>Ammontare nominale credito IVA a rimborso :</strong> € {{ number_format($rimborso->iva, 2, '.', ',')}}</p>
                      
                      @if($rimborso->stato==1)
                        <p><strong>Stato Partita IVA: </strong> Aperta</p>
                      @elseif($rimborso->stato==0)
                        <p><strong>Stato Partita IVA: </strong> Chiusa</p>
                      @endif

                      @if(!empty($rimborso->year))
                        <p><strong>Modello IVA rimborso :</strong> Iva {{$rimborso->year->year}}</p>
                      @endif
                      
                      <p><strong>Data richiesta rimborso :</strong> {{$rimborso->date}}</p>

                      <p><strong>Numero giorni per valutazione :</strong> {{$rimborso->giorni_rimborso}}</p>
                      <p><strong>Valutazione piattaforma HUB TRIBUTARIO :</strong> € {{number_format($rimborso->evaluation, 2, '.', ',')}} </p>

                    @elseif($rimborso->type == 3)
                      <p><strong>IVA ex ART. 74b :</strong>  € {{ number_format($rimborso->art74, 2, '.', ',')}}</p>  

                      <p><strong>Ammontare nominale credito IVA a rimborso :</strong> € {{ number_format($rimborso->iva, 2, '.', ',')}}</p>
                      
                      @if($rimborso->stato==1)
                        <p><strong>Stato Partita IVA: </strong> Aperta</p>
                      @elseif($rimborso->stato==0)
                        <p><strong>Stato Partita IVA: </strong> Chiusa</p>
                      @endif

                      @if(!empty($rimborso->year))
                        <p><strong>Modello IVA rimborso :</strong> Iva {{$rimborso->year->year}}</p>
                      @endif


                      <p><strong>Numero giorni per valutazione :</strong> {{$rimborso->giorni_rimborso}}</p>
                      <p><strong>Valutazione piattaforma HUB TRIBUTARIO :</strong> € {{number_format($rimborso->evaluation, 2, '.', ',')}} </p>
                    @endif
                  @endif

                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
                                            <!-- #2B5C6B -->
      <table width="600" border="0" bgcolor="#BB7631" cellspacing="0" cellpadding="20" id="contact_container">
        <tr>
          <td align="center" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="20" id="contact">
              <tr>
<!-- style="padding-top: 0; padding-bottom: 0;" -->
                <td >
                  <p style="color: #F4F4F4; font-size: 20px; margin: 0px!important; text-align: left;">Verrete contattati a breve da un nostro incaricato.</p>
                  <p style="color: #F4F4F4; font-size: 20px; margin: 0px!important; text-align: left;">Cordiali saluti</p>
                  <p style="color: #F4F4F4; font-size: 20px; margin: 0px!important; text-align: left;">HUB Tributario</p>
                  <p style="color: #F4F4F4; font-size: 20px; margin: 0px!important; text-align: left;">Gruppo Naos Investimenti spa</p>
                </td>

              </tr>

            </table>
            <!-- // END #contact -->
          </td>
        </tr>
      </table>
      <!-- // END #contact_container -->


    </td>
  </tr>
</table>
<!-- // END #background -->
</body>