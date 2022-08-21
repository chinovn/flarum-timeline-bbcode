<?php namespace ChinoVN\BBCode\Timeline;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
  	->css(__DIR__.'/less/forum.less'),
    (new Extend\Formatter)
    ->configure(function (Configurator $config) {

        $config->BBCodes->addCustom('[TLI={IDENTIFIER} {TEXT}]{ANYTHING}[/TLI]', 
                '<div class="cb-timeline">
                    <div class="cb-center-line"></div>
                    <div class="cb-info">
                        <i class="icon fas fa-{IDENTIFIER}"></i>
                        <div class="cb-timestamp">{TEXT}</div>
                        <div class="cb-content">
                            {ANYTHING}
                        </div>
                    </div>
                </div>'
            );
        $config->BBCodes->addCustom('[TLC={COLOR} {TEXT}]{ANYTHING}[/TLC]', 
                '<div class="cb-timeline">
                    <div class="cb-center-line2" style="background:{COLOR} !important;"></div>
                    <div class="cb-info">
                        <i class="icon2" style="background: {COLOR} !important;"></i>
                        <div class="cb-timestamp2" style="background:{COLOR} !important;">{TEXT}</div>
                        <div class="cb-content2">
                            {ANYTHING}
                        </div>
                    </div>
                </div>'
            );
        
        
    })
];
