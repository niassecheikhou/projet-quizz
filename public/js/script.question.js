const myclick=document.getElementById('add');
const mydemo=document.getElementById('demo');
const supp=document.getElementById('selection');




let  i=0; 

myclick.addEventListener('click',function(){
    var myselection=document.getElementById('selection').value;
    var par=document.createElement('div');
    par.setAttribute('id',`grand_${i}`);

    if(myselection == "choix_simple"){
  
    par.innerHTML=`<input type="text" name="dm_${i}" value=""> 
    
    
        
    <input type="radio" name="yu" value="">
    
    
    <i class="fa-solid fa-trash-can" id="suprim" onclick="deletee(${i})"></i>`
  
    mydemo.appendChild(par);
    }

    if(myselection == "choix_multiple"){
  
        par.innerHTML=`<input type="text" name="cm_${i}" value=""> 
        
        
            
        <input type="checkbox" name="" value="">
        
        
        <i class="fa-solid fa-trash-can" id="suprim" onclick="deletee(${i})"></i>`
      
        mydemo.appendChild(par);
        }

        if(myselection == "text"){
  
            par.innerHTML=`<input type="text" name="lm_${i}" value=""> 
            
            
            
            <i class="fa-solid fa-trash-can" id="suprim" onclick="deletee(${i})"></i>`
          
            mydemo.appendChild(par);
            }
    
            supp.addEventListener('click',function(){
                par.parentElement.removeChild(par);
              })

    i++


})

function deletee(i) {

    // document.getElementById('grand').remove();c'est la mm chose

    const mygrand=document.getElementById('grand_'+i)
    mygrand.remove();
 }


