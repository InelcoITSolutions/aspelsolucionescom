
<!-- start contact us Section -->
<section id="ctn_sec">
  <div class="container">
    <div class="row">

      <div class="col-sm-6" id="id='crmWebToEntityForm'"> 
        <div id="cnt_form">
        <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
     
      <form id="contact-form" class="contact" name=WebForm2073942000003405723 method="post" action='https://crm.zoho.com/crm/WebForm' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8' method='POST'>
          
          <!-- Do not remove this code. -->
          <input type='text' style='display:none;' name='xnQsjsdp' value='353048640bda0357a66d8e5c57048280bb0532329552ee29655b29a1aecec1c6'/>
          <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
          <input type='text' style='display:none;' name='xmIwtLD' value='cd8a13ffaae3a66c0d142196633534a582db12848dec43d78a864bc96c477b0b'/>
          <input type='text' style='display:none;'  name='actionType' value='Q3VzdG9tTW9kdWxlNw=='/>
          <input type='text' style='display:none;' name='returnURL' 
          value='https&#x3a;&#x2f;&#x2f;www.aspelsoluciones.com&#x2f;&#x2f;contacto' /> 
   <!-- Do not remove this code. -->
            <div class="form-group">
            <input type="text" name='NAME' class="form-control name-field" required="required" placeholder="Nombre">
            </div>

            <div class="form-group">
              <input type="text" name='COBJ7CF4' class="form-control mail-field" required="required" placeholder="Apellidos">
            </div>

            <div class="form-group">
              <input type="email" name='Email' class="form-control name-field" required="required"    placeholder="Correo electronico">
            </div>

            <div class="form-group">
              <input type="text" name='COBJ7CF5' class="form-control mail-field" required="required" placeholder="Telefono">
            </div> 

            <div class="form-group">
              <input type="text" name='COBJ7CF6' class="form-control mail-field" required="required" placeholder="Empresa">
            </div>
            
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="cnt_form">
         <table style='display: none;'>
           <tr style='display:none;' >
              <td style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:50%'>Producto de Interes</td>
          <td style='width:250px;' >

            <input type='text' style='width:250px;'  maxlength='255' name='COBJ7CF7' value='AspelSol&#x20;Contacto'>
    
            </input>
          </td>
        </tr>
           
         </table>
         
            <div class="form-group">
              <textarea name='COBJ7CF1' id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
            </div> 
            
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="reset" class="btn btn-danger">Reestablecer</button>
            </div>
            <script>
    var mndFileds=new Array('COBJ7CF5','NAME','COBJ7CF1','COBJ7CF4');
    var fldLangVal=new Array('Telefono','Nombre','Desripcion','Apellidos');
    var name='';
    var email='';

    function checkMandatory() {
    for(i=0;i<mndFileds.length;i++) {
      var fieldObj=document.forms['WebForm2073942000003405723'][mndFileds[i]];
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
       }   
  </script>
            </form>
        </div>
      </div>      
    </div>
  </div>
</section>
<!-- End contact us  Section -->