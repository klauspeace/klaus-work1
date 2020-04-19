<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="kin@kinskards.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name"
        value="Birthday - Cake and Candle">
  <input type="hidden" name="amount" value="3.95">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Provide a drop-down menu option field, without prices. -->
  <input type="hidden" name="on0" value="Color">
  <label for="os0">Color scheme</label>
    <select name="os0" id="os0">
      <option value="Select a color scheme">-- Select a color scheme --</option>
      <option value="Blue">Blue</option>
      <option value="Pink">Pink</option>
      <option value="Yellow">Yellow</option>
  </select>

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>