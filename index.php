<div class="power">Power</div>
<div class="etat-machine">Eteint</div>

<script>

let monBouton = document.querySelector('.power');

monBouton.addEventListener('click', () => {
    fetch('./allumer_machine_a_cafe.php')
    .then(response => response.text())
    .then(status => {
        let etat = document.querySelector('.etat-machine');
        etat.innerHTML = status;
    })
})

</script>