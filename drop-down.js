function Show (Id) 
{
	var x=document.getElementById(Id);
	if (x) {
	    x.style.visibility = "visible";
	}
	return true;
	// body...
}
function Hide(Id)
{
	var y=document.getElementById(Id);
	if(y)
		y.style.visibility="hidden";
	return true;
}