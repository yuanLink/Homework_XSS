function set_cookie(c_name, name, expire_days) {
	// body...
	var day = new Date()
	day.setDate(day.getDate() + expire_days)
	// ad escape to duel with utf-8
	document.cookie = c_name + "="+escape(name) +
	((expire_days == null)? "":";expire_days="+day.toGMTString())
}

function get_cookie(c_name){
	if (document.cookie.length>0){
		var start = document.cookie.indexOf(c_name + "=")
		if(start!=-1){
			start += c_name.length + 1
			var end = document.cookie.indexOf(";", start)
			if (end == -1) end = document.cookie.length
			return unescape(document.cookie.substring(start, end))
		}
	}
	return ""
}


function check_cookie(name){
	username = get_cookie("name")
	if(username == ""){
		set_cookie("name", name, 1)
	}

}