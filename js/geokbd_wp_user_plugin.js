GeoKBD.wp_plugin = {
	/* Script from code.ge http://about.ge/blog/?p=60 */
	insertHTML: function(container, html){
		var container = document.getElementById(container);
		var wrapper   = document.createElement('div');
		while(container.firstChild) { container.removeChild(container.firstChild); }
		if (container.tagName.toLowerCase() == 'tbody') {
			wrapper.innerHTML = '<table>' + html + '</table>';
			var rows = wrapper.getElementsByTagName('tr');
			for (var i = 0; i <rows.length; i++) { container.appendChild(rows[i]); }
			rows = null;
		} else {
			wrapper.innerHTML = html;
			while(wrapper.firstChild) { container.appendChild(wrapper.firstChild); }
		}
		container = wrapper = null;
	},
	showCheckboxInComments: function(checked,text) {
			var div = document.createElement('div');
			 div.id="geocheckbox";
			 var objPosition = document.getElementById("author");
			 if(objPosition==null) { objPosition = document.getElementById("comment"); }
			 if(objPosition!=null) {
				 var parentDiv = objPosition.parentNode;
				 parentDiv.insertBefore(div, objPosition);
				 divInnerHTML  = '<input type="checkbox" align="left" '+(checked==true?'checked="checked"':'')+' name="geo" id="geo" style="width:16px" />';
				 if(text!=''){
				 	divInnerHTML += '<label for="geo" style="font-size:10px">'+text+'</label>';
				 }
				 GeoKBD.wp_plugin.insertHTML('geocheckbox',divInnerHTML);
			}
	}
}