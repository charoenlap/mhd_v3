                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>


<script>
  $(document).ready(function () {
    $('#showdetail_program').hide();
    $('#showdetail_program .select2').select2({
      placeholder: "Choose",
    });

    $('.received_check').click(function (e) { 
      if ($(this).is(':checked')) {
        if ($(this).val()==1) {
          $('#showdetail_program').slideDown(); 
        } else {
          $('#showdetail_program').hide();
        }
      }
    });
  });
</script>