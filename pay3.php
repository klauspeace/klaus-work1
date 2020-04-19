<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="kin@kinskards.com">

    <!-- Specify an Add to Cart button. -->
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="add" value="1">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="Birthday - Cake and Candle">
    <input type="hidden" name="amount" value="3.95">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Provide the buyer with a text box option field. -->
    <input type="hidden" name="on0"value="Size">
    <label for="os0">Enter your size (S, M, L, X, XX)</label>
    <input type="text" name="os0" id="os0" maxlength="60">

    <!-- Display the payment button. -->
    <input type="image" name="submit"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
        alt="Add to Cart">
    <img alt="" width="1" height="1"
        src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>
