
  const btnsModifier = document.querySelectorAll('.modification');
  const block = document.querySelector('.contener')
  const id = document.querySelector('#idyear')
  const Anuller = document.querySelector('.Anuller')
  const Modifier = document.querySelector('.Modifier')

//   for (var i = 0; i < btnsModifier.length; i++) {
//     btnsModifier[i].addEventListener('click',()=>{
//         block.style.display = 'flex'
        
//     });
//   }

  btnsModifier.forEach(e => {
    e.addEventListener('click',()=>{
        block.style.display = 'flex'
        id.value = e.getAttribute('data_libelle')
       
    });
  });

  Anuller.addEventListener('click',()=>{
    block.style.display = 'none'
  })
  Modifier.addEventListener('click',()=>{
    block.style.display = 'none'
  })