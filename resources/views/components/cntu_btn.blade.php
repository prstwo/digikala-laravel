@props(['category','txt'])
{{-- you should define seperated js functions for each component in order to seeing the action--}}
<div class="mb-5">
    <a href="#continue" class="px-0 o-btn-link-blue-sm continue-btn-{{$category}}" onclick="toggleCollapse(this)">
{{$txt}}
    </a>
</div>
