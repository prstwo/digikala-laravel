@props(['category','txt'])
<div class="mb-5">
    <a href="#continue" class="px-0 o-btn-link-blue-sm continue-btn-{{$category}}" onclick="toggleCollapse(this)">
{{$txt}}
    </a>
</div>
