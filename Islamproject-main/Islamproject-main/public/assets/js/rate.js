

//  Select All stars and put it on variable to check
var stars = document.querySelectorAll(".stars i");
// looping on stars by click
stars.forEach((star ,index1) =>{
    
    star.addEventListener("click" , () =>{
        //  Another loop to other value 
        stars.forEach((star,index2) =>{
            //  Expression For clicked satrs and Set class active that turn the color to orange  == selected 
            index1 >= index2 ? star.classList.add("active"): star.classList.remove("active")
            localStorage.setItem("star",index1)
        })
    });
    
    
});
function rates() {
    var x = localStorage.getItem("star");
    document.getElementById("demo").innerHTML = x;
    // alert(x);
  }
   

//####################### for backend
const rateDiv = document.querySelector('#rate-div'); 
const rateValue = document.querySelector('#rate-value'); 

rateDiv.addEventListener('click',(event)=>{
    //rate value in hidden input 
    if (event.target.nodeName == 'I'){
       let value = event.target.children[0].value; 
        rateValue.value=value; 
    }
}); 
