<!-- Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="modalImage" class="modal-image"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Loading...</h5>
                <span id="modalPrefix" class="prefix"></span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalText" class="modal-body">
                ...
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="degreeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="degreeTitle">Loading...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="degreeText" class="modal-body">
                ...
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.18.2/core.min.js" integrity="sha512-g8TodWNzrsxJkADtGuwwvVND2MVKUuisGWZsj2/NtLA/XFDq9biQpeDMcJ8iu71OpabLfDxfEAdTQFdXjmV60A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://mcapi.us/scripts/minecraft.js"></script>
<script>
  function getServerStatus(server, obj) {
    html = obj.html();
    obj.html(obj.html().replace("%status%", "Loading..."))
    MinecraftAPI.getServerStatus(server, {
      port: 25565
    }, function (err, status) {
      if (err) {
        obj.html(html.replace("%status%", "Error loading status"));
      }
      if (status.online) {
        obj.html(html.replace("%status%", status.players.now + "/" + status.players.max));
      } else {
        obj.html(html.replace("%status%", "Offline"));
      }
    });
  }
  AOS.init();
  var app = document.getElementById('sd');
  
  var typewriter = new Typewriter(app, {
    loop: false
  });

  typewriter.typeString('Student Developer').start();
  
  $(document).ready(function() {
    $(".toggle-modal").on("click", function (e) {
      var image = $(this).find('.image').html();
      var name = $(this).find('.name').text();
      var text = $(this).find('.text').html();
      var prefix = $(this).find('.prefix').text();
      var ip = $(this).find('.ip').text();
      var status = ip;

      text = text.replace("%ip%", ip);

      $('#modalTitle').text(name);
      $('#modalPrefix').text(prefix)
      $('#modalText').html(text);
      $('#modalImage').html(image);

      getServerStatus(ip, $('#modalText'));
    });
    $(".toggle-degree").on("click", function (e) {
      var name = $(this).find('.name').html();
      var text = $(this).find('.text').html();
      $('#degreeTitle').html(name);
      $('#degreeText').html(text);
    });
    
  });
  
</script>