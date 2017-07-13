/* Script from about.ge http://about.ge/blog/?p=60  */
(function() {
  var cBox = {
	onImg: '',
	offImg: '',
	getById: function(obj) {
				return document.getElementById(obj);
		},
		checkThisBox: function(obj) {
				if (obj.type=='checkbox') {
					this.getById(obj.name + '_cBoxImg').src = (obj.checked == false) ? this.offImg : this.onImg;
				} else {
					var checkObj = obj.id.replace('_cBoxImg','');
					var checkStatus = this.getById(checkObj).checked;
					obj.src = (checkStatus==true) ? this.offImg : this.onImg;
					checkStatus = (checkStatus==true) ? false  : true;
					this.getById(checkObj).checked=checkStatus;
				};
		},
		addAllEvets: function(form){
			var form = document.forms[form];
			for (var i = 0; i<form.elements.length; i++) {
				if (form.elements[i].name) {
					if (form.elements[i].type == 'checkbox') {
						form.elements[i].onclick = function() { cBox.checkThisBox(this) }
					}
				}
			}
		},
		changeCheckboxs: function(form,debug){
			debug = (debug) ? true : false;
			var params = new Array();
			var form = document.forms[form];
			for (var i = 0; i<form.elements.length; i++) {
				if (form.elements[i].name) {
					if (form.elements[i].type == 'checkbox') {
						var img = document.createElement('img');
							img.style.cursor = "pointer";
							img.id = form.elements[i].id+"_cBoxImg";
							img.src = (form.elements[i].checked) ? this.onImg : this.offImg;
							img.setAttribute('align', 'absmiddle');
							img.onclick = function() { cBox.checkThisBox(this) }
							form.elements[i].parentNode.insertBefore(img, form.elements[i].nextSibling);
							form.elements[i].style.display = (debug==false) ? 'none' : 'inline';
					}
				}
			}				
		},
		init: function(form,debug){
			this.addAllEvets(form);
			this.changeCheckboxs(form,debug);
		}
};
	window.cBox = cBox;	
})();