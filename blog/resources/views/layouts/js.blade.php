<script>
    function init(){
    var selection = document.getElementById('selection')
    var account = document.getElementById('account')

    var sm1 = document.getElementById('sub-menu1')
    var sm2 = document.getElementById('sub-menu2')
    var sm3 = document.getElementById('sub-menu3')
    var sm4 = document.getElementById('sub-menu4')
    var sm5 = document.getElementById('sub-menu5')
    var sm6 = document.getElementById('sub-menu6')
    var sm7 = document.getElementById('sub-menu7')

    selection.addEventListener("mouseover", selectionchange)
    selection.addEventListener("mouseout", selectionchange)

    account.addEventListener("mouseover", accountchange)
    account.addEventListener("mouseout", accountchange)

    function selectionchange(event){
        if(event.type === "mouseover"){
            sm1.style.display = 'block'
            sm2.style.display = 'block'
            sm3.style.display = 'block'

        }else{
            sm1.style.display = 'none'
            sm2.style.display = 'none'
            sm3.style.display = 'none'
        }
    }
    function accountchange(event){
        if(event.type === "mouseover"){
            sm4.style.display = 'block'
            sm5.style.display = 'block'
            sm6.style.display = 'block'
            sm7.style.display = 'block'

        }else{
            sm4.style.display = 'none'
            sm5.style.display = 'none'
            sm6.style.display = 'none'
            sm7.style.display = 'none'
        }
    }
}
</script>