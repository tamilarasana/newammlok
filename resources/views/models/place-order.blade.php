<div class="modal fade" id="placeOrder" style="z-index: 9999;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Place Order</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">
                <form class="needs-validation" action="{{ route('create.order') }}" method="POST">
                    @csrf
                    @foreach ($rawColor as $color)
                        @if ($color->id == $status)
                            <p><label for=""> Color : </label>{{ $color->color }}</p>
                        @endif
                    @endforeach
                    <input type="hidden" name="color_id" value="{{ $status }}">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <p>Select Size</p>
                    @forelse ($sizes as $key => $size)
                        <p>
                            <input type="radio" id="male" name="size_id" value="{{ $size->sizes->id }}" required>
                            <label for="male">{{ $size->sizes->size }}</label><br>
                        </p>
                    @empty
                    No Stock Available
                    @endforelse
                    <label for="qty">Qty:</label>
                    <input type="number" class="input-text qty" name="quantity" title="Qty" value="1" maxlength="12" id="qty" name="qty">
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<style>
    body .modal-backdrop {
z-index: 0;
}
</style>

