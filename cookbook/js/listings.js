var p1 = 'ctt';
var p2 = 'ct';
var p3 = 'c';
var p4 = 'cc';
var id =[]

for (var i = 0; i < resid.length; i++) {
  id[i] = resid[i].toString();
}



for (var i = 1; i <= resname.length; i++) {

  document.getElementById(i).style.visibility = "visible";
  document.getElementById(p4+i).src = "img/caterers/"+id[i-1]+".jpg";
  document.getElementById(p1+i).innerHTML = resname[i-1];
  document.getElementById(p2+i).innerHTML = "Specialising in "+rescui[i-1]+" Cuisine";
  document.getElementById(p3+i).innerHTML = "Rated "+resrate[i-1]+" &#9733; on an Average by Customers";
}
