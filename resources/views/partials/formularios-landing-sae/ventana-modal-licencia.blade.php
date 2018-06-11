
<!-- BEGIN # MODAL LICENCIA -->
<div class="modal fade" id="licencia-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
            <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
                    <form id="login-form" action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2073942000002836001 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory1()' accept-charset='UTF-8'>
                <div class="modal-header" align="center">
                    <img class="img-circle" id="img_logo" src="/img/img-landings-sae/aspel-SAE-formulario.png">
                    <button type="button" onclick="this.form.reset();" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-times" aria-hidden="true"></span>
                    </button>
                </div>
                <!-- Begin # DIV Form -->
                <div id="div-forms crmWebToEntityForm">
                    <!-- Begin # Login Form -->
                    <!-- Do not remove this code. -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a5533a8e877658fcc0ad0e15db568a1414'/>
                    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                    <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;www.aspelsoluciones.com&#x2f;nuevo-sae' /> 
                    <!-- Do not remove this code. -->
                    <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
                    <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
                     <!-- Do not remove this code. -->

                        <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="fa fa-user"></div>
                                <span id="text-login-msg">Licencia permanente</span>
                            </div>

                            <!-- nombre-->
                              <input id="login_username" class="form-control" type="text" 
                              placeholder="Nombre" required name='First Name' 
                              onkeypress="return minus(event)">

                              <!-- apellidos-->
                              <input id="login_username" class="form-control" type="text" 
                              placeholder="Apellidos" required name='Last Name' 
                              onkeypress="return minus(event)">

                              <!-- telefono-->
                              <input id="apellidos" class="form-control" type="text" 
                              placeholder="Telefono" required name='Phone' 
                              onkeypress="return numeros(event)">

                              <!-- email-->
                              <input id="login_username" class="form-control" type="text" 
                              placeholder="Correo" required name='Email' 
                              onkeypress="return minus(event)">
                              <br>
                              <!-- comentarios-->
                              <textarea id="login_username" class="form-control" name='' placeholder="Comentarios"></textarea>
                            
                        </div>

                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                            </div>
                            <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Al termino verifica tu correo</button>
                            </div>
                        </div>

                        <table>
  <tr style='display:none;' ><td style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:50%'>Fuente de Posible cliente</td><td style='width:250px;'>
    <select style='width:250px;' name='Lead Source'>
      <option value='-None-'>Ninguno</option>
    <option selected value='AS&#x20;SAE&#x20;COMPRA'>AS SAE COMPRA</option>
    </select></td></tr>

   </table>
  <script>
    var mndFileds=new Array('Last Name');
    var fldLangVal=new Array('Apellidos');
    var name='';
    var email='';

    function checkMandatory1() {
    for(i=0;i<mndFileds.length;i++) {
      var fieldObj=document.forms['WebToLeads2073942000002836001'][mndFileds[i]];
      if(fieldObj) {
      if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
       if(fieldObj.type =='file')
        { 
         alert('Seleccione un archivo para cargar.'); 
         fieldObj.focus(); 
         return false;
        } 
      alert(fldLangVal[i] +' no puede estar vacío.'); 
              fieldObj.focus();
              return false;
      }  else if(fieldObj.nodeName=='SELECT') {
             if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
        alert(fldLangVal[i] +' no puede ser nulo.'); 
        fieldObj.focus();
        return false;
         }
      } else if(fieldObj.type =='checkbox'){
       if(fieldObj.checked == false){
        alert('Please accept  '+fldLangVal[i]);
        fieldObj.focus();
        return false;
         } 
       } 
       try {
           if(fieldObj.name == 'Last Name') {
        name = fieldObj.value;
          }
      } catch (e) {}
        }
    }
    trackVisitor();
  }
</script><script type='text/javascript' id='VisitorTracking'>var $zoho= $zoho || {salesiq:{values:{},ready:function(){$zoho.salesiq.floatbutton.visible('hide');}}};var d=document;s=d.createElement('script');s.type='text/javascript';s.defer=true;s.src='https://salesiq.zoho.com/ventassyca/float.ls?embedname=ventassyca';t=d.getElementsByTagName('script')[0];t.parentNode.insertBefore(s,t);function trackVisitor(){try{if($zoho){var LDTuvidObj = document.forms['WebToLeads2073942000002836001']['LDTuvid'];if(LDTuvidObj){LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();}var firstnameObj = document.forms['WebToLeads2073942000002836001']['First Name'];if(firstnameObj){name = firstnameObj.value +' '+name;}$zoho.salesiq.visitor.name(name);var emailObj = document.forms['WebToLeads2073942000002836001']['Email'];if(emailObj){email = emailObj.value;$zoho.salesiq.visitor.email(email);}}} catch(e){}}</script>
                    </form>        
                </div>
                <!-- End # DIV Form -->
            </div>
        </div>
    </div>
    <!-- END # MODAL LICENCIA -->