  <div class="list-group">
  <div id="sidemenu">
    <ul>
      <div><li><a href="#" class="list-group-item list-group-item-action">Cras justo odio</a></li></div>
      <div><li><a href="#" class="list-group-item list-group-item-action shell">Dapibus ac facilisis in</a></li></div>
      <div><li><a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a></li></div>
      <div><li><a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a></li></div>
      <div><li><a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a></li></div>
    </ul>
  </div>
</div>


<script type="text/javascript">

  $(document).ready(function(){
  $(document).keydown(function(e){
        //CTRL + C keydown combo
        if(e.ctrlKey && e.keyCode == 67){
              // alert("I've been pressed!");
              // $(".shell").text("putangina");
              // $(".shell").text(window.getSelection().toString());
              document.execCommand('copy')
              $(".shell").text(document.execCommand('paste'));
              // alert(window.clipboardData.getData());
        }
  });
  });



</script>
