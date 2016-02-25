	function delFun(id){
			 
			var x=confirm("Are You Sure you want to delete");
			if(x==true){
				
					SendData="id="+id;
			 
			 $.ajax({ url: 'delete-gov.php', 
				dataType: 'text',
				type: 'post',
				async: false, 
				data: SendData,
				success: function(data)
				{   
					
					   
					
					//var comm=data.text();  	
						$('#del').text("Deleted Successfully"); 
				}, 
				error: function( jqXhr, textStatus, errorThrown ){ 
				console.log( errorThrown ); 
			   } });
				
			}
			else{
				return false;
				
			}
		
			 
			 
			 
		}



function regFun(){
			
			   
				
				var name= $('#name').val();
					 
				var email=$('#email').val();
				var username=$('#username').val();
				var password=$('#password').val();
				var age=$('#age').val();
				var gender=$('#gender').val();
				var location=$('#location').val();
			
				
				
				
				
				//alert(name);
				var regxName=/^[a-zA-Z ]*$/;
				var regxUserName=/^[a-zA-Z0-9._-]*$/;
			 
				//var error=0;
				var ch=0;
				
				if(name=="")
				{
					$('#errorName').text('This Is Required Field');
					$('#name').css('border-color','red');
					ch++;
				}
				else
				{
					if(regxName.test(name))
					{
					$('#errorName').text('');
					$('#name').css('border-color','white');
					
					}
					
					else
					{
					$('#errorName').text('Only Characters Allowed Here');
					$('#name').css('border-color','red');
					ch++;
					}
				}  
			
			
				var regxEmail  = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
				 
				if(email=="")
				{
					$('#errorEmail').text('Please Enter Email Address');
					$('#email').css('border-color','red');
					ch++;
				}
				else
				{
					if(regxEmail.test(email))
					{
					$('#errorEmail').text('');
					$('#email').css('border-color','white');
					}
					
					else
					{
					$('#errorEmail').text('Please Enter Valid Email Address');
					$('#email').css('border-color','red');
					ch++;
					}
				}  
					
					
					
				 		
				
				
				if(username=="")
				{
					$('#usernameError').text('Please Enter username');
					$('#username').css('border-color','red');
					ch++;
				}
				else
				{
					if(regxUserName.test(username))
					{
					$('#usernameError').text('');
					$('#username').css('border-color','white');
					
					}
					
					else
					{
					$('#usernameError').text('No Space Allowed');
					$('#username').css('border-color','red');
					ch++;
					}
				} 
				
				
				
				



				
					
					
				
				if(password=="")
				{
					$('#passwordError').text('Please Enter username');
					$('#password').css('border-color','red');
					ch++;
				}
				else{
					$('#passwordError').text('');
					$('#password').css('border-color','white');
					
				    }
					
				if(age==15)
				{
					$('#errorAge').text('Please Enter age');
					$('#age').css('border-color','red');
					ch++;
				}
				else{
					$('#errorAge').text('');
					$('#age').css('border-color','white');
					
				    }
				
		       if(gender==null)
				{
					$('#genderError').text('Select the Gender');
					$('#gender').css('border-color','red');
					ch++;
				}
				else{
					$('#genderError').text('');
					$('#gender').css('border-color','white');
					
				    }
					
			    if(location==null)
				{
					$('#locationError').text('Select location');
					$('#location').css('border-color','red');
					ch++;
				}
				else{
					$('#locationError').text('');
					$('#location').css('border-color','white');
					
				    }
					
			
			
					
					if(ch>0){
					return false;
						}
					 
	
			
			/* validation ends */
			
var Token= "save-citizen";  
 SendData= "Token="+Token+"&fld_name="+name+"&fld_email="+email+"&fld_username="+username+"&fld_password="+password+"&fld_age="+age+"&fld_gender="+gender+"&fld_location="+location;
					
			
			//alert(SendData);
					
		
			$.ajax({
			url:'AjaxHandler.php',
			type:'POST',
			data: SendData,
			success:function(data){
				$("#form-citizen")[0].reset();
				$('#succesdiv').text(data).css('color','red');
				
				
				}
			
			
			});
			

			
}//regFun


function gov_empFun(){
			
			   
				
				var name= $('#name').val();
				var email=$('#email').val();
				var username=$('#username').val();
				var password=$('#password').val();
				 
				var position=$('#position').val();
				var location=$('#location').val();
			
				
				
				
				
				 
				var regxName=/^[a-zA-Z ]*$/;
				var regxUserName=/^[a-zA-Z0-9._-]*$/;
				 
				var ch=0;
				
				if(name=="")
				{
					$('#errorName').text('Please Enter Full Name');
					$('#name').css('border-color','red');
					ch++;
				}
				else
				{
					if(regxName.test(name))
					{
					$('#errorName').text('');
					$('#name').css('border-color','white');
					
					}
					
					else
					{
					$('#errorName').text('Only Characters Allowed Here');
					$('#name').css('border-color','red');
					ch++;
					}
				}  
			
			
				var regxEmail  = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
				 
				if(email=="")
				{
					$('#errorEmail').text('Please Enter Email Address');
					$('#email').css('border-color','red');
					ch++;
				}
				else
				{
					if(regxEmail.test(email))
					{
					$('#errorEmail').text('');
					$('#email').css('border-color','white');
					}
					
					else
					{
					$('#errorEmail').text('Please Enter Valid Email Address');
					$('#email').css('border-color','red');
					ch++;
					}
				}  
					
			 
					
				if(username=="")
				{
					$('#usernameError').text('Please Enter username');
					$('#username').css('border-color','red');
					ch++;
				}
				else
				{
					if(regxUserName.test(username))
					{
					$('#usernameError').text('');
					$('#username').css('border-color','white');
					
					}
					
					else
					{
					$('#usernameError').text('No Space Allowed');
					$('#username').css('border-color','red');
					ch++;
					}
				} 
				
			 
			 
				
				if(password=="")
				{
					$('#passwordError').text('Please Enter Password');
					$('#password').css('border-color','red');
					ch++;
				}
				else{
					$('#passwordError').text('');
					$('#password').css('border-color','white');
					
				    }
					
				 
				
		       if(position==null)
				{
					$('#positionError').text('Select the Position');
					$('#position').css('border-color','red');
					ch++;
				}
				else{
					$('#positionError').text('');
					$('#position').css('border-color','white');
					
				    }
					
			    if(location==null)
				{
					$('#locationError').text('Select location');
					$('#location').css('border-color','red');
					ch++;
				}
				else{
					$('#locationError').text('');
					$('#location').css('border-color','white');
					
				    }
					
			
			
					
					if(ch>0){
					return false;
						}
								
			/* validation ends */
			
			var Token= "save-govemp";  
 SendData= "Token="+Token+"&fld_name="+name+"&fld_email="+email+"&fld_username="+username+"&fld_password="+password+"&fld_position="+position+"&fld_location="+location;
					
			
			//alert(SendData);
					
		
			$.ajax({
			url:'AjaxHandler.php',
			type:'POST',
			data: SendData,
			success:function(data){
				$("#form-gov")[0].reset();
				$('#succesdiv').text(data).css({
												   'font-size' : '20px',
												   'font-family' : 'sans-serif',
												   'color' : 'red',
												   'font-weight': 'bold'
												});
				
				
				}
			
			
			});
			
			
			
			
			
			
}//fun
		
	 
				
			
    		
	 
				
			
    