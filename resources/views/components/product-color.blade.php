@props(['productColor'])
<li class=" js-circle-variant-item circle-variant-item">
    <label  class="circle-variant-color circle-variant">
        <input type="radio" class="" id="variant" name="color" data-title={{$productColor['dataTitle']}}>
        <span class="circle-variant-border">
        </span>
        <span class="circle-variant-shape" style="background-color:{{$productColor['colorCode']}}"></span>
    </label>
</li>
