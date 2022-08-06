wp.blocks.registerBlockVariation('core/group', {
	name: 'full-width-group',
	title: 'Full width group',
	attributes: {
		align: 'full',
	},
});

wp.blocks.registerBlockVariation(
	'core/group',
	{
		name: 'wide-group',
		title: 'Wide group',
        attributes: {'align':'wide','layout':{'inherit':true}},
        innerBlocks: [
			['core/group',
                {
                    'align':'wide',
                }]
		]
	}
);


// Attempt to add icon variation (failed)
//wp.blocks.registerBlockVariation('core/social-link', {
//	title: 'Play Icon',
//	attributes: {
//		label:'Play Icon', 
//		providerNameSlug: 'playicon', 
//		name: 'play-icon', 
//	icon: 'GoogleIcon' ,},
//	icon: PlayIcon,
//});
