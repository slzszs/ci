var Validator = {
	validateEmail : function(email) {
		return /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/.test(email);
	},
	validateAccount : function(account) {
		return /^[a-zA-Z0-9_\u4e00-\u9fa5]{2,12}$/.test(account);
	},
	validatePassword : function(password) {
		return password.length >= 6 && password.length <= 16; 
	},
	validatePhone : function(phone) {
		return /^1[3,4,5,8][0-9]{8}[0-9]$/.test(phone); 
	},
	checkExistAccount : function(apiUrl, account, onExists, onNonExists) {
		$.ajax({
			url:apiUrl,
			type:'POST',
			data:"account:" + account,
			dataType:"json",
			success:function(data){
				if (data.code == '200' && data.code) {
					if (data.data == 1) {
						onExists();
						return;
					}
				}
				onNonExists();
			}
		});
	},
	getPasswordStrength : function(password) {
		var digitCount = 0;
		var upperCount = 0;
		var lowerCount = 0;
		var otherCount = 0;
		var score = 0;
		for (var i = 0; i < password.length; i++) {
			var c = password.charAt(i);
			if (c >= '0' && c <= '9') {
				digitCount++;
			} else if (c >= 'A' && c <= 'Z') {
				upperCount++;
			} else if (c >= 'a' && c <= 'z') {
				lowerCount++;
			} else {
				otherCount++;
			}
		}
		if (password.length >= 6 && password.length <= 7) {
			score += 10;
		} else if (password.length > 7) {
			score += 25;
		}
		if (upperCount > 0 || lowerCount > 0) {
			if (upperCount == 0  || lowerCount == 0) {
				score += 10;
			} else {
				score += 20;
			}
		}
		if (digitCount >= 3) {
			score += 20;
		} else if (digitCount > 0) {
			score += 10;
		}
		if (otherCount >= 3) {
			score += 25;
		} else if (otherCount > 0) {
			score += 10;
		}
		if (digitCount > 0 && upperCount > 0 && lowerCount > 0 && otherCount > 0) {
			score += 5;
		} else if (digitCount > 0 && (upperCount > 0 || lowerCount > 0) && otherCount > 0) {
			score += 3;
		} else if (digitCount > 0 && (upperCount > 0 || lowerCount > 0)) {
			score += 2;
		}
		if (score >= 60) {
			return "strong";
		} else if (score >= 50) {
			return "middle";
		} else {
			return "weak";
		}
	}
};