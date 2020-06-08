<?php
add_shortcode('coursecard', 'msosh_shortcode');
function msosh_shortcode( $atts = [], $content = null) {
    // do something to $content
    // always return
  
    $content = '<div class="row">
    <div class="col"><i class="fa fa-star"></i>
        <h1>Heading</h1>
        <div role="tablist" class="text-left accordion ml-5" id="accordion-q">
            <div class="card">
                <div role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-q .item-1" href="#accordion-q .item-1" class="collapsed">  Accordion ITEM</a></h5>
                </div>
                <div role="tabpanel" data-parent="#accordion-q" class="collapse item-1">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br /></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-q .item-2" href="#accordion-q .item-2" class="collapsed"><strong>ACCORDION ITEM</strong></a></h5>
                </div>
                <div role="tabpanel" data-parent="#accordion-q" class="collapse item-2">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div role="tab" class="card-header">
                    <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-q .item-3" href="#accordion-q .item-3" class="collapsed"><strong>ACCORDION ITEM</strong></a></h5>
                </div>
                <div role="tabpanel" data-parent="#accordion-q" class="collapse item-3">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>'

    return $content;
}
?>