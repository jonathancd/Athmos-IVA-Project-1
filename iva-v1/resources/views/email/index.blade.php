
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

  <table width="100%" bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" id="background" style="height: 100% !important; margin: 0; padding: 0; width: 100% !important;">
    <tr>
      <td align="center" valign="top">

        <table width="600" border="0"  cellspacing="0" cellpadding="0" id="body_container">
          <tr>
            <td align="center" valign="top" class="body_content">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">

                <tr>
                  <td valign="top" style="padding: 0; text-align: center;">
                    <img src="http://mtsvd.co.ve/iva-v1/public/images/LOGO_HUB_TRIBUTARIO_JPEG.jpg" style="height: 150px!important;">
                  </td>
                </tr>

              </table>
            </td>
          </tr>
        </table>
        
      <table width="600" border="0" bgcolor="#474544" cellspacing="0" cellpadding="0" id="body_container">
          <tr>
            <td align="center" valign="top" class="body_content">
              <table width="100%" border="0" cellspacing="0" cellpadding="10">
              
                <tr>
                  <td valign="top" style="padding: 0;">
                    <h2 style="color: #FFFFFF; font-size: 22px; margin: 0px; text-align: center;">
                      {{App\Translation::getTranslation('email_pdf_title')}}
                    </h2>
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
            <td align="center" valign="top" class="body_content" style="padding: 5px;">
              <table width="100%" border="0" cellspacing="0" cellpadding="20">

                <tr>
                  <td valign="top" style="padding: 0;">
                    <h2 style="color: #FFFFFF; font-size: 22px; text-align: center;">
                      {{App\Translation::getTranslation('email_pdf_offer_code')}}
                    </h2>
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
          <td align="center" valign="top" class="body_info_content" style="padding: 5px 15px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="20">
              <tr>
                <td valign="top">            
                  @if(!empty($rimborso->provincia))
                    <h4 style="margin: 5px;">
                      {{App\Translation::getTranslation('email_pdf_province')}}: 
                      {{$rimborso->provincia->name}}
                    </h4>
                  @endif
                  @if(!empty($data['telephone']))
                    <h4 style="margin: 5px;">
                      N° {{App\Translation::getTranslation('email_pdf_person_telephone')}}: 
                      {{$data['telephone']}}
                    </h4>
                  @endif
                  @if(!empty($data['name']))
                    <h4 style="margin: 5px;">
                      {{App\Translation::getTranslation('email_pdf_person_name')}}: 
                      {{$data['name']}}
                    </h4>
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
                  <p style="color: #666666; font-size: 14px; line-height: 22px; text-align: center;">
                    {{App\Translation::getTranslation('email_pdf_base_data')}}
                  </p>
                </td>
              </tr>
              
              <tr>
                <td>
                  
                  
                  @if(!empty($rimborso))
                    @if($rimborso->type == 1)
                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_company_type')}}: 
                        </strong> 
                        {{App\Translation::getTranslation('email_pdf_active_snc_ltd')}}
                      </p>

                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_credito_refunded')}}: 
                        </strong> 
                        € {{ number_format($rimborso->iva, 2, '.', ',')}}
                      </p>

                      @if(!empty($rimborso->year))
                        <p>
                          <strong>
                            {{App\Translation::getTranslation('email_pdf_iva_model')}}: 
                          </strong> 
                          Iva {{$rimborso->year->year}}
                        </p>
                      @endif

                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_evaluation_date')}}: 
                        </strong> 
                        {{$rimborso->date}}</p>
                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_number_days')}}: 
                        </strong> 
                        {{$rimborso->giorni_rimborso}}</p>
                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_evaluation_hub')}}: 
                        </strong> 
                        € {{number_format($rimborso->evaluation, 2, '.', ',')}} 
                      </p>

                    @elseif($rimborso->type == 2)
                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_company_type')}}: 
                        </strong> 
                        {{App\Translation::getTranslation('email_pdf_closeout_snc_ltd')}}
                      </p>

                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_credito_refunded')}}: 
                        </strong> 
                        € {{ number_format($rimborso->iva, 2, '.', ',')}}
                      </p>
                      
                      @if($rimborso->stato==1)
                        <p>
                          <strong>
                            {{App\Translation::getTranslation('email_pdf_iva_status')}}: 
                          </strong> 
                          {{App\Translation::getTranslation('email_pdf_open')}}
                        </p>
                      @elseif($rimborso->stato==0)
                        <p>
                          <strong>
                            {{App\Translation::getTranslation('email_pdf_iva_status')}}: 
                          </strong> 
                          {{App\Translation::getTranslation('email_pdf_close')}}
                        </p>
                      @endif

                      @if(!empty($rimborso->year))
                        <p>
                          <strong>
                            {{App\Translation::getTranslation('email_pdf_iva_model')}}: 
                          </strong> 
                          Iva {{$rimborso->year->year}}
                        </p>
                      @endif
                      
                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_evaluation_date')}}: 
                        </strong> {{$rimborso->date}}</p>

                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_number_days')}}:
                        </strong> {{$rimborso->giorni_rimborso}}
                      </p>
                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_evaluation_hub')}}: 
                        </strong> 
                        € {{number_format($rimborso->evaluation, 2, '.', ',')}} 
                      </p>

                    @elseif($rimborso->type == 3)
                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_company_type')}}: 
                        </strong>
                        {{App\Translation::getTranslation('email_pdf_consultant_receiver')}}
                      </p>

                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_art74')}}: 
                        </strong>
                        € {{ number_format($rimborso->art74, 2, '.', ',')}}
                      </p>  

                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_credito_refunded')}}: 
                        </strong>
                        € {{ number_format($rimborso->iva, 2, '.', ',')}}
                      </p>
                      
                      @if($rimborso->stato==1)
                        <p>
                          <strong>
                            {{App\Translation::getTranslation('email_pdf_iva_status')}}: 
                          </strong>
                            {{App\Translation::getTranslation('email_pdf_open')}}
                        </p>
                      @elseif($rimborso->stato==0)
                        <p>
                          <strong>
                            {{App\Translation::getTranslation('email_pdf_iva_status')}}: 
                          </strong>
                            {{App\Translation::getTranslation('email_pdf_close')}}
                        </p>
                      @endif

                      @if(!empty($rimborso->year))
                        <p>
                          <strong>
                            {{App\Translation::getTranslation('email_pdf_iva_model')}}: 
                          </strong>
                          Iva {{$rimborso->year->year}}
                        </p>
                      @endif


                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_number_days')}}: 
                        </strong>
                        {{$rimborso->giorni_rimborso}}
                      </p>

                      <p>
                        <strong>
                          {{App\Translation::getTranslation('email_pdf_evaluation_hub')}}: 
                        </strong>
                        € {{number_format($rimborso->evaluation, 2, '.', ',')}}
                      </p>
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

                <td style="padding: 0px 25px;">
                  <p style="color: #F4F4F4; font-size: 20px; margin: 0px!important; text-align: left;">
                    {{App\Translation::getTranslation('email_pdf_will_contacted')}}
                  </p>
                  <p style="color: #F4F4F4; font-size: 20px; margin: 0px!important; text-align: left;">
                    {{App\Translation::getTranslation('email_pdf_best_regards')}}
                  </p>
                  <p style="color: #F4F4F4; font-size: 20px; margin: 0px!important; text-align: left;">
                    {{App\Translation::getTranslation('email_pdf_hub_tributario')}}
                  </p>
                  <p style="color: #F4F4F4; font-size: 20px; margin: 0px!important; text-align: left;">
                    {{App\Translation::getTranslation('email_pdf_group_name')}}
                  </p>
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