 var value=[0,0];
 var role=[];
 function validate()
     {
      var a = document.getElementById("value2").value;
      if(a==1)
      {
        var root=prompt("Enter the root role");
        if(root!=false)
        {
        var root_name=prompt("Enter the name");
        value[0]=root;
        value[1]=root_name;
        //console.log("Asssd");
        role.push(root);
        role.push(root_name);
        localStorage.setItem(root,value);
        alert("Root node created");
        }
        else
        {
          alert("Enter valid role");
        }   
        document.getElementById('outmain').innerHTML="*"+root+"->"+root;
      }
      if(a==2)
      {
        let subrole=prompt("Enter sub role");
        let subrole_name=prompt("Enter the name");
        value[0]=subrole;
        value[1]=subrole_name;
        let where=prompt("Enter the reporting role");
        var myArray=localStorage.getItem(where);
        myArray = myArray.split(",");
        myArray.push(value[0]);
        myArray.push(value[1]);
        console.log(myArray);
        role.push(subrole);
        role.push(subrole_name);
        localStorage.setItem(subrole,myArray);
        alert("Subrole added successfully");
        let myArray_size=myArray.length;
        let newarray=[];
        for(let i=0;i<myArray_size;i=i+2)
        {
          //if(i==0)continue;
          newarray.push(myArray[i]);
        }
        const para = document.createElement('p');
          const node = document.createTextNode("*"+subrole+"->"+newarray);
        para.appendChild(node);
        const element = document.getElementById("outmain");
        element.appendChild(para);
        //document.getElementById('outmain').innerHTML=subrole+"->"+myArray;
     
      }
      if(a==3)
      {
        document.getElementById('outmain').innerHTML="";
        for(let i=0;i<role.length;i=i+2)
        {
          if(role[i]!="Hey!")
          {
           //var myArray=localStorage.getItem(role[i]);
           const para = document.createElement('p');
            const node = document.createTextNode("*"+role[i]);
            para.appendChild(node);
            const element = document.getElementById("outmain");
            element.appendChild(para);
          console.log(role[i]);
         }
        }
      }
      if(a==4)
      {
        document.getElementById('outmain').innerHTML="";
        let size=role.length;
        for(let i=0;i<size;i=i+2)
        {
          if(role[i]!="Hey!")
          {
           //var myArray=localStorage.getItem(role[i]);
           const para = document.createElement('p');
            const node = document.createTextNode("*"+role[i]+"->"+role[i+1]);
            para.appendChild(node);
            const element = document.getElementById("outmain");
            element.appendChild(para);
          console.log(role[i]);
         }
          console.log(role[i],role[i+1]);
         
        }
      }
      if(a==5)
      {
        var delete_role=prompt("Enter the role to be deleted");
        let size=role.length;
         for(let i=0;i<size;i=i+2)
         {
                let getItem=role[i];
               let myArray_de=localStorage.getItem(getItem);
               myArray_de= myArray_de.split(",");
               let myArray_de_size=myArray_de.length;
               for(let j=0;j<myArray_de_size;j=j+2)
               {
                  if(myArray_de[j]==delete_role)
                  {
                   getItem=role[i];
                   localStorage.removeItem(getItem);
                     role[i]="Hey!";
                  }
                
               }    
         }
         alert("Deletion successfull");
         document.getElementById('outmain').innerHTML="";
         for(let j=0;j<role.length;j=j+2)
         {
          if(role[j]!="Hey!")
          {
            
            const para = document.createElement('p');
            var myArray=localStorage.getItem(role[j]);
            let myArray_size=myArray.length;
            let newarray=[];
            for(let i=0;i<myArray_size;i=i+2)
            {
               newarray.push(myArray[i]);
            }
            const node = document.createTextNode("*"+role[j]+"->"+myArray);
            para.appendChild(node);
            const element = document.getElementById("outmain");
            element.appendChild(para);
          }
         }
      }
      if(a==6)
      {
        let flag=0;
        let parent=prompt("Enter the Parent");
        let size=role.length;
        document.getElementById("outmain").innerHTML="*"+"Parent: "+parent+"\n";
         for(let i=0;i<size;i=i+2)
         {
                let getItem=role[i];
               let myArray_de=localStorage.getItem(getItem);
               myArray_de= myArray_de.split(",");
               let myArray_de_size=myArray_de.length;
               for(let j=0;j<myArray_de_size;j=j+2)
               {
                  if(myArray_de[j]==parent && role[i]!=parent)
                  {
                   getItem=role[i];
                   const para = document.createElement('p');
                   const node = document.createTextNode("*"+role[i]);
                  para.appendChild(node);
                    const element = document.getElementById("outmain");
                   element.appendChild(para);
                   flag=1;
                  }
                
               }  
                 
         }
         if(flag==0)
          {
             const para = document.createElement('p');
            const node = document.createTextNode("*"+"No children found (or) No subrole found");
            para.appendChild(node);
            const element = document.getElementById("outmain");
            element.appendChild(para);
          }

      }
      if(a==7)
      {
        let child=prompt("Enter the parent");
        let size=role.length;
        let flag=0;
        document.getElementById('outmain').innerHTML="Parent: "+child;
        for(let i=0;i<size;i=i+2)
        {
          let getItem=role[i];
           let myArray_de=localStorage.getItem(getItem);
          myArray_de= myArray_de.split(",");
          let myArray_de_size=myArray_de.length;
          if(myArray_de_size>=2)
          {
            for(let j=myArray_de_size-2;j>=0;j=j-2)
            {
              if(myArray_de[j-2]==child)
              {
                const para = document.createElement('p');
               const node = document.createTextNode("*"+role[i]);
               para.appendChild(node);
                 const element = document.getElementById("outmain");
                element.appendChild(para); 
                flag=1;
              }
              break;
            }
          }
        }
        if(flag==0)
        {
          const para = document.createElement('p');
            const node = document.createTextNode("*"+"No children found");
            para.appendChild(node);
            const element = document.getElementById("outmain");
            element.appendChild(para);
        }
      }
  }   
