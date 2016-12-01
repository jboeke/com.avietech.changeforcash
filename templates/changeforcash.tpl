<div id='calcchange-wrapper'>
  <table id='calcchange' class="form-layout" style="width:auto;">
    <tbody>
      <tr>
        <td class="label">
          <input id='btn_calc_change' type='button' value='Calculate Change' class='crm-button'/>
        </td>
        <td>
          <input id='cash_received' type='text' class='crm-form-text' placeholder="Cash Received"/>
        </td>
        <td>
          <div id='change_message'></div>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<script>
{literal}
(function($) {

  $("#calcchange").hide();

  if ($(".crm-event-form-fee-block").length == 0) {
    CRM.alert(ts("Someone has changed the layout. Can't add Cash Change Calculator."));
    return;
  }

  $(".crm-event-form-fee-block").after($("#calcchange-wrapper").html());
  $("#calcchange-wrapper").remove();

  $("#btn_calc_change").click(function() {
  
    $('#change_message').html(""); 
    var total = $("#total_amount").val();
    var cash = $("#cash_received").val();
	
    if(isNaN(total)){ 
    CRM.alert(ts("Missing or invalid total amount."), "", "error");
    return;
    }
	
    if(isNaN(cash)){ 
      CRM.alert(ts("Missing or invalid cash amount."), "", "error");
      return;
    }

    var diff = cash - total;
    var changemsg = ts("Change Due: ") + diff.toFixed(2);
    $('#change_message').html(changemsg);
  });  

})(CRM.$ || cj);
{/literal}
</script>
