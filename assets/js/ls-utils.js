// Global object containing utility functions that need to be loaded in the head

var LSUtils = {
	readCookie: function(name) { 
		var c, ca, i, nameEQ; 
		nameEQ = name + "="; 
		ca = document.cookie.split(";"); 
		i = 0; 
		while (i < ca.length) { 
			c = ca[i]; 
			while (c.charAt(0) === " ") { 
					c = c.substring(1, c.length); 
			} 
			if (c.indexOf(nameEQ) === 0) { 
				return c.substring(nameEQ.length, c.length); 
			} 
			i++; 
		} 
		return null; 
	},
	parseURL: function(url) { 
		var i, parser, queries, searchObject, split; 
		parser = document.createElement("a"); 
		searchObject = {}; 
		queries = void 0; 
		split = void 0; 
		i = void 0; 
		parser.href = url; 
		queries = parser.search.replace(/^\?/, "").split("&"); 
		i = 0; 
		while (i < queries.length) { 
			split = queries[i].split("="); 
			searchObject[split[0]] = split[1]; 
			i++; 
		} 
		return { 
			protocol: parser.protocol, 
			host: parser.host, 
			hostname: parser.hostname, 
			port: parser.port, 
			pathname: parser.pathname, 
			search: parser.search, 
			searchObject: searchObject, 
			hash: parser.hash 
		}; 
	}, 
	createCookie: function(name, value, days) { 
		var date, domain, expires; 
		if (days) { 
			date = new Date(); 
			date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
			expires = "; expires=" + date.toGMTString(); 
		} else { 
			expires = ""; 
		} 
		domain = ""; 
		if (window.location.hostname.indexOf('longshore.agency') !== -1) { 
			domain = ";domain=.longshore.agency"; 
		} 
		document.cookie = name + "=" + value + expires + "; path=/" + domain; 
	},
	isExternal: function(url) {
		var match = url.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);
		if (typeof match[1] === "string" && match[1].length > 0 && match[1].toLowerCase() !== location.protocol) return true;
		if (typeof match[2] === "string" && match[2].length > 0 && match[2].replace(new RegExp(":("+{"http:":80,"https:":443}[location.protocol]+")?$"), "") !== location.host) return true;
		return false;
	}
};