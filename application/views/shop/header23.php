<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo getWebOptionValue('site_title');?>| Dashboard</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/Ionicons/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins  
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/dist/css/skins/_all-skins.min.css">
<!-- Morris chart -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/morris.js/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/jvectormap/jquery-jvectormap.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- jQuery 3 -->

<script>
if(!m_helper)
{var m_helper={removeNode:function(id){var el=document.getElementById(id);if(el){el.parentNode.removeChild(el)}},insertAfter:function(item,target){var parent=target.parentNode;if(target.nextElementSibling){parent.insertBefore(item,target.nextElementSibling)}else{parent.appendChild(item)}},hide:function(element){element.style.display='none'},hideAll:function(array){for(var i=0;i<array.length;i++){this.hide(array[i])}},show:function(element){element.style.display='block'},showAll:function(array){for(var i=0;i<array.length;i++){this.show(array[i])}},parent:function(element,id){var parent=element.parentElement;while(parent&&parent.tagName!='BODY'){if(parent.id==id){return parent}
parent=parent.parentElement}
return null},create:function(data){var result=document.createElement(data.tag);if(data.id){result.id=data.id}
if(data.class){result.className=data.class}
if(data.attributes){for(var prop in data.attributes){result.setAttribute(prop,data.attributes[prop])}}
if(data.data){for(var prop in data.data){result.dataset[prop]=data.data[prop]}}
return result},div:function(data){if(!data){data=new Object()}
data.tag='div';return this.create(data)},label:function(data){if(!data){data=new Object()}
data.tag='label';return this.create(data)},textField:function(data){if(!data){data=new Object()}
data.tag='input';if(!data.attributes)
data.attributes=new Object();data.attributes.type='text';return this.create(data)},checkbox:function(data){if(!data){data=new Object()}
data.tag='input';if(!data.attributes)
data.attributes=new Object();data.attributes.type='checkbox';return this.create(data)},each:function(array,handler){for(var i=0;i<array.length;i++){handler(array[i])}},setActive:function(element){element.classList.add('active')},setUnactive:function(element){element.classList.remove('active')},select:function(element){element.selected=!0;element.setAttribute('selected','selected')},deselect:function(element){element.selected=!1;element.removeAttribute('selected')},check:function(element){element.checked=!0},uncheck:function(element){element.checked=!1},click:function(element){if(element.fireEvent){el.fireEvent('onclick')}else{var evObj=document.createEvent('Events');evObj.initEvent('click',!0,!1);element.dispatchEvent(evObj)}},setDisabled:function(element,value){element.disabled=value},}}
function Multiselect(item,opts){if((typeof($)!='undefined'&&!$(item).is('select'))||(typeof($)=='undefined'&&item.tagName!='SELECT')){throw "Multiselect: passed object must be a select"}
if((typeof($)!='undefined'&&!$(item).attr('multiple'))||(typeof($)=='undefined'&&!item.hasAttribute('multiple'))){throw "Multiselect: passed object should contain 'multiple' attribute"}
this._item=item;this._createUI();this._appendEvents();this._initSelectedFields();this._initIsEnabled()}
Multiselect.prototype={_createUI:function(){m_helper.removeNode(this._getIdentifier());var wrapper=this._createWrapper();m_helper.insertAfter(wrapper,this._item);wrapper.appendChild(this._createInputField());wrapper.appendChild(this._createItemList());m_helper.hide(this._item)},_createWrapper:function(){var result=document.createElement('div');result.className='multiselect-wrapper';result.id=this._getIdentifier();return result},_createInputField:function(){var input=m_helper.textField({id:this._getInputFieldIdentifier(),class:'multiselect-input',attributes:{autocomplete:'off'}}),label=m_helper.label({id:this._getInputBadgeIdentifier(),class:'multiselect-count',attributes:{for:this._getInputFieldIdentifier()}}),dropDownArrow=m_helper.label({class:'multiselect-dropdown-arrow',attributes:{for:this._getInputFieldIdentifier()}}),result=m_helper.div({class:'multiselect-input-div'});label.style.visibility='hidden';label.innerHTML=0;result.appendChild(input);result.appendChild(label);result.appendChild(dropDownArrow);return result},_createItemList:function(){var list=m_helper.create({tag:'ul'});var self=this;m_helper.each(this._getItems(this._item),function(e){var insertItem=self._createItem('li',e.id,e.text,e.selected);list.appendChild(insertItem);var checkBox=insertItem.querySelector('input[type=checkbox]');e.multiselectElement=checkBox;checkBox.dataset.multiselectElement=JSON.stringify(e)});var selectAll=this._createItem('span',-1,'Select all');var result=m_helper.div({id:this._getItemListIdentifier(),class:'multiselect-list'});result.appendChild(selectAll);result.appendChild(m_helper.create({tag:'hr'}));result.appendChild(list);return result},_createItem:function(wrapper,value,text,selected){var checkBox=m_helper.checkbox({class:'multiselect-checkbox',data:{val:value}}),textBox=m_helper.create({tag:'span',class:'multiselect-text'}),result=m_helper.create({tag:wrapper}),label=m_helper.label();textBox.className='multiselect-text';textBox.innerHTML=text;label.appendChild(checkBox);label.appendChild(textBox);result.appendChild(label);return result},_initSelectedFields:function(){var itemResult=this._getItems().filter(function(obj){return obj.selected});if(itemResult.length!=0){var self=this;m_helper.each(itemResult,function(e){self.select(e.id)})}
this._hideList(this)},_initIsEnabled:function(){this.setIsEnabled(!this._item.disabled)},destroy(){m_helper.removeNode(this._getIdentifier());m_helper.show(this._item);var index=window.multiselects._items.indexOf(this._item);if(index>-1){window.multiselects._items.splice(index,1);window.multiselects.splice(index,1)}},select:function(val){this._toggle(val,!0)},deselect:function(val){this._toggle(val,!1)},setIsEnabled(isEnabled){if(this._isEnabled===isEnabled)return;var wrapperItem=document.getElementById(this._getIdentifier());if(isEnabled){wrapperItem.classList.remove('disabled')}else{wrapperItem.classList.add('disabled')}
m_helper.setDisabled(this._item,!isEnabled);m_helper.setDisabled(document.getElementById(this._getInputFieldIdentifier()),!isEnabled);this._isEnabled=isEnabled},_toggle:function(val,setCheck){var self=this;if(val){m_helper.each(document.getElementById(this._getIdentifier()).querySelectorAll('.multiselect-checkbox'),function(e){if(e.dataset.val==val){if(setCheck&&!e.checked){m_helper.check(e);self._onCheckBoxChange(e,self)}else if(!setCheck&&e.checked){m_helper.uncheck(e);self._onCheckBoxChange(e,self)}}});self._updateText(self)}},selectAll:function(val){var selectAllChkBox=document.querySelector('#'+this._getIdentifier()+' .multiselect-checkbox');m_helper.check(selectAllChkBox);this._onCheckBoxChange(selectAllChkBox,this);this._updateText(this)},deselectAll:function(){var selectAllChkBox=document.querySelector('#'+this._getIdentifier()+' .multiselect-checkbox');m_helper.uncheck(selectAllChkBox);this._onCheckBoxChange(selectAllChkBox,this);this._updateText(this)},_checkboxClickEvents:{},setCheckBoxClick(id,handler){if(typeof handler==="function"){this._checkboxClickEvents[id]=handler}else{console.error("Checkbox click handler for checkbox value="+id+" is not a function")}
return this},_appendEvents:function(){var self=this;document.getElementById(self._getInputFieldIdentifier()).addEventListener('focus',function(event){self._showList(self);document.getElementById(self._getInputFieldIdentifier()).value='';m_helper.each(window.multiselects,function(e){if(document.getElementById(e._getItemListIdentifier()).offsetParent&&m_helper.parent(event.target,e._getIdentifier())){e._hideList(self)}})});document.getElementById(self._getInputFieldIdentifier()).addEventListener('click',function(){self._showList(self);document.getElementById(self._getInputFieldIdentifier()).value=''});document.getElementById(self._getIdentifier()).addEventListener('click',function(event){event=event||window.event;var target=event.target||event.srcElement;if(m_helper.parent(target,self._getIdentifier())){event.stopPropagation()}});document.getElementById(self._getItemListIdentifier()).addEventListener('mouseover',function(){self._showList(self)});m_helper.each(document.getElementById(self._getIdentifier()).querySelectorAll('.multiselect-checkbox'),function(e){e.addEventListener('change',function(event){self._onCheckBoxChange(e,self,event)})});var onInput=function(){var text=this.value.toLowerCase();if(!text||text==''){m_helper.show(document.querySelector('#'+self._getItemListIdentifier()+' > span'));m_helper.show(document.querySelector('#'+self._getItemListIdentifier()+' > hr'));m_helper.showAll(document.querySelectorAll('#'+self._getItemListIdentifier()+' li'))}else{m_helper.hide(document.querySelector('#'+self._getItemListIdentifier()+' > span'));m_helper.hide(document.querySelector('#'+self._getItemListIdentifier()+' > hr'));var array=Array.prototype.filter.call(document.querySelectorAll('#'+self._getItemListIdentifier()+' li span'),function(obj){return obj.innerHTML.toLowerCase().indexOf(text)>-1});m_helper.hideAll(document.querySelectorAll('#'+self._getItemListIdentifier()+' li'));m_helper.each(array,function(e){m_helper.show(e.parentElement.parentElement)})}}
document.getElementById(self._getInputFieldIdentifier()).addEventListener('propertychange',onInput);document.getElementById(self._getInputFieldIdentifier()).addEventListener('input',onInput)},_onCheckBoxChange:function(checkbox,self,event){if(!checkbox.dataset.multiselectElement){var checkedState=self._performSelectAll(checkbox,self);if(typeof self._checkboxClickEvents.checkboxAll==="function"){self._checkboxClickEvents.checkboxAll(checkbox,{checked:checkedState})}}
else{var checkedState=self._performSelectItem(checkbox,self);if(typeof self._checkboxClickEvents[checkedState.id]==="function"){self._checkboxClickEvents[checkedState.id](checkbox,checkedState)}
self._updateSelectAll(self)}
self._forceUpdate()},_performSelectItem:function(checkbox,self){var item=JSON.parse(checkbox.dataset.multiselectElement);if(checkbox.checked){self._itemCounter++;m_helper.select(this._item.options[item.index]);m_helper.setActive(checkbox.parentElement.parentElement);return{id:item.id,checked:!0}}
self._itemCounter--;m_helper.deselect(this._item.options[item.index]);m_helper.setUnactive(checkbox.parentElement.parentElement);return{id:item.id,checked:!1}},_performSelectAll:function(checkbox,self){var items=self._getItems();if(checkbox.checked){self._itemCounter=items.length;m_helper.each(items,function(e){m_helper.setActive(e.multiselectElement.parentElement.parentElement);m_helper.select(self._item.options[e.index]);m_helper.check(e.multiselectElement)});return!0}
self._itemCounter=0;m_helper.each(items,function(e){e.multiselectElement.parentElement.parentElement.classList.remove('active');m_helper.deselect(self._item.options[e.index]);m_helper.uncheck(e.multiselectElement)});return!1},_updateSelectAll:function(self){var allChkBox=document.getElementById(self._getItemListIdentifier()).querySelector('input[type=checkbox]');if(self._itemCounter==self._getItems().length){allChkBox.checked=!0}
else if(allChkBox.checked){allChkBox.checked=!1}},_hideList:function(context,event){m_helper.setUnactive(document.getElementById(context._getItemListIdentifier()));m_helper.show(document.getElementById(context._getItemListIdentifier()).querySelector('span'));m_helper.show(document.getElementById(context._getItemListIdentifier()).querySelector('hr'));m_helper.showAll(document.getElementById(context._getItemListIdentifier()).querySelectorAll('li'));context._updateText(context);if(event)
event.stopPropagation()},_updateText:function(context){var activeItems=document.getElementById(context._getItemListIdentifier()).querySelectorAll('ul .active');if(activeItems.length>0){var val='';for(var i=0;i<(activeItems.length<5?activeItems.length:5);i++){val+=activeItems[i].innerText+", "}
val=val.substr(0,val.length-2);if(val.length>20){val=val.substr(0,17)+'...'}}
if(activeItems.length==document.getElementById(context._getItemListIdentifier()).querySelectorAll('ul li').length){val='All selected'}
document.getElementById(context._getInputFieldIdentifier()).value=val?val:''},_showList:function(context){m_helper.setActive(document.getElementById(context._getItemListIdentifier()))},_forceUpdate:function(){var badge=document.getElementById(this._getInputBadgeIdentifier());badge.style.visibility='hidden';if(this._itemCounter!=0){badge.innerHTML=this._itemCounter;badge.style.visibility='visible';var ddArrow=badge.nextElementSibling;if(this._itemCounter<10){badge.style.left='-45px';ddArrow.style.marginLeft='-42px'}
else if(this._itemCounter<100){badge.style.left='-50px';ddArrow.style.marginLeft='-47px'}
else if(this._itemCounter<1000){badge.style.left='-55px';ddArrow.style.marginLeft='-52px'}
else if(this._itemCounter<10000){badge.style.left='-60px';ddArrow.style.marginLeft='-57px'}}},_items:undefined,_itemCounter:0,_isEnabled:!0,_getItems:function(){if(this._items==undefined){var result=[];var opts=this._item.options;for(var i=0;i<opts.length;i++){var insertItem={id:opts[i].value,index:i,text:opts[i].innerHTML,selected:!!opts[i].selected,selectElement:opts[i]};result.push(insertItem)}
this._items=result}
return this._items},_getItemUniqueIdentifier:function(){var id=this._item.getAttribute('id'),name=this._item.getAttribute('name');if(!(id||name)){throw "Multiselect: object does not contain any identifier (id or name)"}
return id?id:name},_getIdentifier:function(){return this._getItemUniqueIdentifier()+'_multiSelect'},_getInputFieldIdentifier:function(){return this._getItemUniqueIdentifier()+'_input'},_getItemListIdentifier:function(){return this._getItemUniqueIdentifier()+'_itemList'},_getInputBadgeIdentifier:function(){return this._getItemUniqueIdentifier()+'_inputCount'}}
window.multiselects=[];if(typeof($)!='undefined'){$.fn.multiselect=function(){var res=[];if(!window.multiselects._items){window.multiselects._items=[]}
if(this.length!=0){$(this).each(function(i,e){var index=window.multiselects._items.indexOf(e);if(index==-1){var inputItem=new Multiselect(e);window.multiselects.push(inputItem);window.multiselects._items.push(e);res.push(inputItem)}else{res.push(window.multiselects[index])}})}
return res.length==1?res[0]:$(res)};$(document).click(function(event){hideMultiselects(event)})}else{document.multiselect=function(selector){var res=[];if(!window.multiselects._items){window.multiselects._items=[]}
m_helper.each(document.querySelectorAll(selector),function(e){var index=window.multiselects._items.indexOf(e);if(index==-1){var inputItem=new Multiselect(e);window.multiselects.push(inputItem);window.multiselects._items.push(e);res.push(inputItem)}else{res.push(window.multiselects[index])}});return res.length==1?res[0]:res}
window.onclick=function(event){hideMultiselects(event)}}
function hideMultiselects(event){m_helper.each(window.multiselects,function(e){if(document.getElementById(e._getItemListIdentifier()).offsetParent&&!m_helper.parent(event.target,e._getIdentifier())){e._hideList(e,event)}})}
</script>
<script src="<?php echo base_url();?>backend_assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>backend_assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>backend_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- bootstrap-notify -->
<script src="<?php echo base_url();?>backend_assets/dist/js/bootstrap-notify.js"></script>
<script src="<?php echo base_url();?>backend_assets/dist/js/nicEdit-latest.js"></script>
<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";
</script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- Google Font -->
<style type="text/css">
    .skin-blue .main-header .navbar {
      background-color: #005551 !important;
    }
    .skin-blue .main-header .logo {
      background-color: #005551 !important;
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
          background: rgba(0,0,0,0.1);
    }
    .skin-blue .sidebar-menu>li.active>a {
      border-left-color: #005551 !important;
    }
    .p10{
      padding : 10px;
    }
	.w-100{ width:100%  !important;}
	.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.375rem + 1.5vw) !important;
}

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
  font-size: calc(1.3rem + 0.6vw) !important;
}

.fs-4 {
  font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-5 {
  font-size: 1.25rem !important;
}

.fs-6 {
  font-size: 1rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.5 !important;
}
#poduct span{ margin-right:10px !important; margin-top:20px !important; border:1px #D4D4D4 solid; padding-top:5px !important; padding-bottom:5px !important; padding-left:5px !important; padding-right:5px !important; cursor:pointer;}


.multiselect-wrapper {
	width: 180px;
	display: inline-block;
	white-space: nowrap;
	font-size: 12px;
	font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
}

.multiselect-wrapper .multiselect-input {
	width: 100%;
	padding-right: 50px;
}

.multiselect-wrapper label {
	display: block;
	font-size: 12px;
	font-weight : 600;
	text-align:left;
}

.multiselect-wrapper .multiselect-list {
	z-index: 1;
	position: absolute;
	display: none;
	background-color: white;
	border: 1px solid grey;
	border-bottom-left-radius: 2px;
	border-bottom-right-radius: 2px;
	margin-top: -2px;
}

	.multiselect-wrapper .multiselect-list.active {
		display: block;
	}

	.multiselect-wrapper .multiselect-list > span {
		font-weight: bold;
	}

	.multiselect-wrapper .multiselect-list .multiselect-checkbox {
		margin-right: 2px;
	}

	.multiselect-wrapper .multiselect-list > span,
	.multiselect-wrapper .multiselect-list li {
		cursor: default;
	}

.multiselect-wrapper .multiselect-list {
	padding: 5px;
	min-width: 200px;
}

.multiselect-wrapper ul {
	list-style: none;
	display: block;
	position: relative;
	padding: 0px;
	margin: 0px;
	max-height: 200px;
	overflow-y: auto;
	overflow-x: hidden;
}

	.multiselect-wrapper ul li {
		padding-right: 20px;
		display: block;
	}

		.multiselect-wrapper ul li.active {
			background-color: rgb(0, 102, 255);
			color: white;
		}

		.multiselect-wrapper ul li:hover {
			background-color: rgb(0, 102, 255);
			color: white;
		}

.multiselect-input-div {
	height: 34px;
}

	.multiselect-input-div input{
		border: 1px solid #F00;
		background : #fff;
		margin: 5px 0 6px 0;
		padding:8px;
		vertical-align:middle;
	}

.multiselect-count {
	position: relative;
	text-align: center;
	border-radius: 2px;
	background-color: lightblue;
	display: inline-block !important;
	padding: 2px 7px;
	left: -45px;
}

.multiselect-wrapper.disabled .multiselect-dropdown-arrow {
	border-top: 5px solid lightgray;
}

.multiselect-wrapper.disabled .multiselect-count {
	background-color: lightgray;
}

.multiselect-dropdown-arrow {
	width: 0;
	height: 0;
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-top: 5px solid black;
	position: absolute;
	line-height: 20px;
	text-align: center;
	display: inline-block !important;
	margin-top: 17px;
	margin-left: -42px;
}


		/* example of setting the width for multiselect */
		#testSelect1_multiSelect {
			width: 100%;
		}
		.sp-quantity div { display: inline; }


</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<?php  $session_userdata = $this->session->userdata(SHOP_SESSION); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url();?>admin" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>ES</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><img src="<?php echo base_url().'uploads/'. getWebOptionValue('backlogo');?>" alt="<?php echo  getWebOptionValue('site_title');?>"></span> </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
    <div class="navbar-custom-menu">
     <ul class="nav navbar-nav">
         <li><a class="btn btn-primary" data-toggle="modal" data-target="#myModal" href="#">Pream Destribution</a></li>
    </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url();?>backend_assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo (isset($session_userdata) && !empty($session_userdata) ?$session_userdata['owner_name'] .'('. $session_userdata['shop_reg_id'] .')': '');?></span> </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li> <a href="<?php echo base_url();?>shop/profile" class="btn btn-default btn-flat" style="width:100%;"><i class="fa fa-user"></i> My Profile</a> </li>
            <li> <a href="<?php echo base_url();?>shop/changePassword" class="btn btn-default btn-flat" style="width:100%;"><i class="fa fa-key"></i> change Password</a> </li>
            <li> <a href="<?php echo base_url();?>shop/logout" class="btn btn-default btn-flat" style="width:100%;"><i class="fa fa-sign-out"></i> Sign out</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <style type="text/css">
   @media (max-width: 767px){
    .skin-blue .main-header .navbar .dropdown-menu li a{
        color: #000 !important;
    }
  }
  @media (max-width: 991px){
        .navbar-custom-menu>.navbar-nav>li>.dropdown-menu {
        background: #eee !important;
    }
  }
  .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a {
      color: #fff;
      background: #005551 !important ;
  }
  </style>
</header>
<!--Model open start-->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
            <div class="d-flex flex-column text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        </div>
      <!-- Modal body -->
      <div class="modal-body" id="userdetail" style="display:block;">
            <div class="row">
                <div class="col-lg-5">
                	<img src="<?php echo base_url()."uploads/pream-destribution-img1.jpg";//echo $image; ?>" style="width:100%;height:auto; margin-top:30%;">
                </div>
                <div class="col-sm-7" >
                    <div class="w-100" style="font-size:30px; line-height:40px; margin-bottom:20px; font-weight:bold">Pream Destribution</div>         
                    <div class="w-100 bg-light border" style="border:1px #999 solid; padding:30px; width:100%; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.10); float:left;">
                        <div class="w-100">
                            <div class="input-group " style="margin-top:20px;">
                            
                                <input type="text" class="form-control " id="publicid" placeholder="Enter User Public ID" aria-describedby="basic-addon1" style=" border:1px #F00 solid;">
                                <span class="input-group-addon glyphicon glyphicon-search" name="search" id="public_id" onclick="myfunction2()" style=" border:1px #F00 solid;" id="basic-addon1"></span>
                            </div>
                            
                            <div class="w-100" style="margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;"></div>
                        </div>
                        <div id="userinfo">
                        <!-- <div class="w-100" style="margin-top:20px; margin-top:30px; border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;">User Information</div> -->
                        <!-- <div class="w-100" style="margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;">
                            <table width="100%" border="0" style="font-size:16px;">
                              <tr style="padding-bottom:120px;"> 
                                <td rowspan="3"><img src="<?php echo base_url()."uploads/user-icon1.jpg";//echo $image; ?>" style="width:auto;height:auto"></td>
                                <td id="publicid1" style="font-weight:bold;">Customer not here</td>
                              </tr>
                            </table>
                        </div>    -->  
                         <!-- <div class="w-100" style="margin-top:10px; text-align:center;  color:#F00; font-weight:bold ;font-size:16px;">Amount Spent on this visit</div>
                            <div class="w-100" style="margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="4000" style="border:1px #F00 solid;">
                            </div>
                                
                            <div class="w-100" style="margin-top:20px; text-align:center;  color:#F00; font-weight:bold font-size:16px;">      
                                <button type="submit" class="btn btn-danger amountpay" style="padding-left:20px; padding-right:20px;" onclick='myfunction(0)'>Submit</button>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="myModal2">
    <img src="<?php echo base_url()."uploads/pream-destribution-img1.jpg"; ?>" style="width:100%;height:auto; margin-top:50%;">
    <td rowspan="3"><img src="<?php echo base_url()."uploads/user-icon1.jpg"; ?>" style="width:auto;height:auto"></td>
</div>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <?php 
        $shop = $this->session->userdata(SHOP_SESSION);
        $shop_id=$shop['shop_id'];
    ?>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header" style="color: #fff"><?php echo (isset($session_userdata) && !empty($session_userdata) ?$session_userdata['owner_name'] . ' ('. $session_userdata['shop_reg_id'] .')': '');?></li>
      <li class="<?php echo (checkTabActive(array("index"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a> </li>
      <li class="<?php echo (checkTabActive(array("profile"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/profile"><i class="fa fa-user"></i> <span>Edit Profile</span></a> </li>
      <li class="<?php echo (checkTabActive(array("shopdetail"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/shopdetail"><i class="fa fa-user"></i> <span>Shop Detail</span></a> </li>
      <li> <a href="<?php echo base_url();?>shop/userdeails/<?php echo $shop_id; ?>"><i class="fa fa-user"></i> <span>User Detail</span></a> </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>shop/categories"><i class="fa fa-circle-o"></i> Category</a></li>
            <!--<li><a href="<?php echo base_url();?>shop/subcategories"><i class="fa fa-circle-o"></i> Sub category</a></li>-->
          </ul>
      </li>
      <li class="<?php echo (checkTabActive(array("productlist","addproduct"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/productlist"><i class="fa fa-cart-arrow-down"></i> <span>Products</span></a> </li>
      <li class="<?php echo (checkTabActive(array("neworders"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/neworders"><i class="fa fa-cart-arrow-down"></i> <span>New Orders</span></a> </li>
      <li class="<?php echo (checkTabActive(array("orderhistory"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/orderhistory"><i class="fa fa-cart-arrow-down"></i> <span>orderhistroy</span></a> </li>
      <li class="<?php echo (checkTabActive(array("chat"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/support_ticket"><i class="fa fa-comment"></i> <span>Support Chat</span></a> </li>
      <li class="<?php echo (checkTabActive(array("coupons"))) ? "active" : ""; ?>"> <a href="<?php echo base_url();?>shop/coupons"><i class="fa fa-comment"></i> <span>coupons</span></a> </li>
      <li><a href="<?php echo base_url();?>shop/faqlist"><i class="fa fa-question-circle"></i><span>FAQ</span></a>
      </li>
      <li><a href="<?php echo base_url();?>shop/feedback"><i class="fa fa-question-circle"></i><span>Feedback</span></a>
      </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Analytics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>shop/Total_Sales"><i class="fa fa-circle-o"></i>Total Sales</a></li>
            <li><a href="<?php echo base_url();?>shop/Total_Following_Users"><i class="fa fa-circle-o"></i>Total Following Users</a></li>
            <li><a href="<?php echo base_url();?>shop/Total_CheckIn_Users"><i class="fa fa-circle-o"></i>Total CheckIn Users</a></li>
            <li><a href="<?php echo base_url();?>shop/Tokens"><i class="fa fa-circle-o"></i> Tokens</a></li>
          </ul>
      </li>
      <li><a href="<?php echo base_url();?>shop/promotionlist"><i class="fa fa-question-circle"></i><span>Promotion List</span></a>
      </li>
       <li><a href="<?php echo base_url();?>shop/contact_us"><i class="fa fa-question-circle"></i><span>Contact Us</span></a>
      </li>
       <li><a href="<?php echo base_url();?>shop/Smart_Contract_Details"><i class="fa fa-question-circle"></i><span>Smart Contract Details</span></a>
      </li>
       <li><a href="<?php echo base_url();?>shop/destribuionhistory"><i class="fa fa-history" aria-hidden="true"></i><span>Pream Destribution History</span></a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>-->
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
 <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
  <script src="<?php echo base_url();?>backend_assets/js/calc.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <!--calc.js<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">-->
<script>

    function myfunction(id){
         var ammount=$(".amount").val();
         var id2=$("#publicid").val();
         if(publicid=id2){
                 var productid=[];
                $(".addselect table").each(function(i,e){
                   var elems =$(this).attr("data-id");
                   var prem=$("input.quntity-input"+elems).val();
                   productid.push({'id' : elems,'prem':prem})
                });
                if(ammount!=""){
                    $("#userinfo").css("display","block");
                        $.ajax({
                  type:"POST",
                  url:"<?php echo base_url()?>shop/amountpay",
                  data:{ammount:ammount,id:id,id2:id2,productid:productid},
                  dataType:"json",
                  success:function(res){
                  	//console.log(res.data.pream_points);
                      if(res.status==1){
                          if(res.data.seller_data.image!=""){
                              var img="<?php echo base_url()?>uploads/category/"+res.data.seller_data.image;
                          }else{
                              var img="<?php echo base_url();?>uploads/user-icon1.jpg";
                          }
                        $.notify(res.msg, "success");
                            $("#myModal").css("display","none");
                         $("#myModal2").css("display","block");
                         var html="<div class='modal-dialog modal-lg'><div class='modal-content'><div class='modal-header'><div class='d-flex flex-column text-center'><button type='button' class='close' data-dismiss='modal'>&times;</button></div></div><div class='modal-body'><div class='row'><div class='col-lg-5'><img src='<?php echo base_url()."uploads/pream-destribution-img1.jpg"; ?>' style='width:100%;height:auto; margin-top:50%;'></div><div class='col-sm-7'><div class='w-100' style='font-size:30px; line-height:40px; margin-bottom:20px; font-weight:bold'>Pream Destribution</div><div class='w-100 bg-light border' style='border:1px #999 solid; padding:30px; width:100%; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.10); float:left;'><div class='w-100' style='border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;'>User Information</div><div class='w-100' style='margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;'><table width='100%' border='0' style='font-size:16px;'><tr style='padding-bottom:120px;'><td rowspan='3'><img src='"+img+"' style='width:100px;height:100px;'></td><td id='publicid1' style='font-weight:bold;'>Public Id</td><td>:"+res.data.seller_data.pablic_id+"</td></tr><tr><td id='name' style='font-weight:bold;'>Name</td><td>: "+res.data.seller_data.name+"</td></tr><tr><td  id='checkin' style='font-weight:bold;'>Check In Time</td><td>: "+res.data.seller_data.checkintime+"</td></tr></table></div><div class='w-100' style='margin-top:10px; border-bottom:1px #C7C7C7 solid; color:#F00; font-size:22px;'>Reciept of Destibution</div><div class='w-100' style='margin-top:20px;  border-bottom:1px #C7C7C7 solid; padding-bottom:20px;'><table width='100%' border='0' style='font-size:16px;'><tr style='padding-bottom:120px;'><td id='publicid1' style='font-weight:bold;'>Amount Spent</td><td>:"+res.data.ammount+"</td></tr><tr><td id='name' style='font-weight:bold;'>Pream Awarded</td><td>: "+res.data.seller_data.name+"</td></tr><tr><td  id='checkin' style='font-weight:bold;'>Vendor Pream</td><td>: "+res.data.seller_data.checkintime+"</td></tr><tr><td id='checkin' style='font-weight:bold;'>Pream point</td><td>: "+res.data.pream_points+"</td></tr><tr><td  id='checkin' style='font-weight:bold;'>Global Pream</td><td>: "+res.data.seller_data.checkintime+"</td></tr></table></div><div class=''><div class='text-center'><h4 class=''>Reciept of Destribution</h4>Amount Spent : "+res.data.ammount+"<br><br><a class='btn btn-danger' type='button' onclick='newDestri();'>New Destribution</a></div></div></div></div></div></div><div class='modal-footer'></div></div></div>";
                        $("#myModal2").html(html);
                      }else{
                            $.notify(res.msg, "error");
                      }
                      //$("#userdetail").html("<p id='publicid1'>Public Id:"+res.seller_data.pablic_id+"</p><p id='name'>Name: "+res.seller_data.name+"</p><p id='checkin'>Check In Time: "+res.seller_data.checkintime+"</p>");
                  }
            });
                }else{
                    $.notify("Please fill amount", "error");
                }
         }else{
             $.notify("Please fill correct pabulic id", "error");
              //setTimeout(function(){location.reload()},1000);
         }
    }
    
     function myfunction2(){ 
       var public_id=$("#publicid").val();
       $.ajax({
              type:"POST",
              url:"<?php echo base_url()?>shop/publiclist",
              data:{public_id:public_id},
              dataType:"json",
              success:function(res){
                     $("#userinfo").html(res.html);
              }
       });        
    }
    // $(".multiselect-checkbox").click(function(){
    //    alert('ok');
    // });
    $("#testSelect1").click(function(){
       alert();
    var selectedValues = [];    
    $("#testSelect1 :selected").each(function(){
        selectedValues.push($(this).val()); 
    });
    alert(selectedValues);
    //return false;
});
    function changeproduclist(id){
       alert('ok');
    }
</script>
<script>
    function newDestri(){
        $("#myModal2").hide();
        $("#myModal").css("display","block");
        setTimeout(function(){location.reload()},1000);
    }
    $(document).ready(function(){
    $(document).on('click', '.close', function(){
        // $("#myModal2").hide();
        // $("#myModal").hide();
          setTimeout(function(){location.reload()},1000);
    });
    });
    
</script>
<script>
// $(document).ready(function() { 
// $("#amountadd").html(html);
 
//      });
// });
</script>
