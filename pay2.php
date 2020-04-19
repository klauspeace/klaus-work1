<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="kin@kinskards.com">

    <!-- Specify an Add to Cart button. -->
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="add" value="1">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="Birthday - Cake and Candle">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Provide a drop-down menu option field. -->
    <input type="hidden" name="on0" value="Color">
    <label for="os0">Color scheme</label>
        <select name="os0" id="os0">
            <option value="Select a color scheme">
                -- Select a color scheme --</option>
            <option value="Blue">Blue</option>
            <option value="Pink">Pink</option>
            <option value="Yellow">Yellow</option>
        </select>

    <!-- Provide a drop-down menu option field with prices. -->
    <input type="hidden" name="on1" value="Size">
    <label for="os1">Size</label>
	<select name="os1" id="os1">
        <option
            value="Select a size">-- Select a size --</option>
        <option value="2x4">2 x 4 - $3.95 USD</option>
        <option value="3x5">3 x 5 - $4.95 USD</option>
        <option value="4x6">4 x 6 - $5.95 USD</option>
    </select>

    <!-- Specify the price that PayPal uses for each option. -->
    <input type="hidden" name="option_index" value="1">
    <input type="hidden" name="option_select0" value="2x4">
    <input type="hidden" name="option_amount0" value="3.95">
    <input type="hidden" name="option_select1" value="3x5">
    <input type="hidden" name="option_amount1" value="4.95">
    <input type="hidden" name="option_select2" value="4x6">
    <input type="hidden" name="option_amount2" value="5.95">

    <!-- Display the payment button. -->
    <input type="image" name="submit"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
        alt="Add to Cart">
    <img alt="" width="1" height="1"
        src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>