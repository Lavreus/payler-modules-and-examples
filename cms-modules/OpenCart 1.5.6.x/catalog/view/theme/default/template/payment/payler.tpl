<!DOCTYPE html>
<!--
The MIT License

Copyright 2014 Payler LLC

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
-->
<form id="payler_submit_form" action="<?=$post_url?>" method="POST">
<input type="hidden" name="session_id" value="<?=$session_id?>">
</form>

<div class="buttons">
	<div class="right">
		<input type="button" value="<?php echo $button_confirm; ?>" id="payler_submit" class="button" />
	</div>
</div>

<script type="text/javascript">
<!--
$('#payler_submit').bind('click', function() {
    $('#payler_submit_form').submit();
});
-->
</script>