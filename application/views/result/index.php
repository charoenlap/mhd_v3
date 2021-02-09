<p>Drive API Quickstart</p>
<!--Add buttons to initiate auth sequence and sign out-->
<button id="authorize_button" style="display: none;">Authorize</button>
<button id="signout_button" style="display: none;">Sign Out</button>

<pre id="content" style="white-space: pre-wrap;"></pre>


<script src="<?php echo base_url();?>google-drive-api/index.js"></script>
<script async defer src="https://apis.google.com/js/api.js"
  onload="this.onload=function(){};handleClientLoad()"
  onreadystatechange="if (this.readyState === 'complete') this.onload()">
</script>