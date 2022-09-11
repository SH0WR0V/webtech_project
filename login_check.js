const form=document.getElementById('form');
const uname_1=document.getElementById('username');
const password_1=document.getElementById('password');
// const b1=document.getElementById('btnlogin');
form.addEventListener('submit', (e)=>{
	validate();
	validate1();
});
function validate()
{
	if(uname_1.value=="")
		setError(uname_1,'User name is empty');
	else
		setSuccess(uname_1);
}
function validate1()
{
	if(password_1.value=="")
		setError1(password_1,'Password is empty');
	else
		setSuccess1(password_1);

}
function setError(input,msg)
{
	const x=document.getElementById('form-control');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}
function setSuccess(input)
{
	const itag=document.getElementById('success');
	itag.style.visibility="visible";
	itag.style.color="green";
	input.style.borderColor="green";
}
function setError1(input,msg)
{
	const x=document.getElementById('form-control1');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error1');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}
function setSuccess1(input)
{
	const itag=document.getElementById('success1');
	itag.style.visibility="visible";
	itag.style.color="green";
	input.style.borderColor="green";

}
//  newFunction();
// function newFunction() {
    // if (uname_1 != "" && password_1 != "") {
        // <a href="login_check.php"></a>;
    // }
// }

