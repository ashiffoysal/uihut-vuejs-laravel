<script src="https://cdn.paddle.com/paddle/paddle.js"></script>
<script type="text/javascript">
    @if(config('paddle.sandbox_environment'))
    Paddle.Environment.set('sandbox');
    @endif
    Paddle.Setup(@json(['vendor' => (2507) config('paddle.vendor_id')]));
</script>
