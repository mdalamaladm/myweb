var bahasa = document.getElementById('bahasa');
var prog = document.getElementById('programming');
var ilum = document.getElementById('pumum');
var body = document.getElementById('body');
var spec = document.getElementById('specific');

bahasa.addEventListener('click', function(){

  if(bahasa.className === 'bahasa'){
  spec.style.display = 'block';
  bahasa.className += ' anim';
  } else {
  bahasa.className = 'bahasa';
  spec.style.display = 'none';
  }

});

prog.addEventListener('click', function(){

  if(prog.className !== 'programming anim'){
    spec.style.display = 'block';
    prog.className += ' anim';
    } else {
    prog.className = 'programming';
    spec.style.display = 'none';
    
    }

 
});

ilum.addEventListener('click', function(){

  if(ilum.className === 'pumum'){
    spec.style.display = 'block';
    ilum.className += ' anim';
    } else {
    ilum.className = 'pumum';
    spec.style.display = 'none';
    }


});

