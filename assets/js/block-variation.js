wp.blocks.registerBlockVariation('core/group', {
	name: 'hody-full-width-group',
	title: 'Full width group',
	attributes: {
		align: 'full',
	},
});

wp.blocks.registerBlockVariation(
	'core/group',
	{
		name: 'hody-wide-group',
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

wp.blocks.registerBlockVariation(
	'core/image', {
		name: 'hody-icon-mage',
		title: 'Icon Image',
		attributes: {'align':'','height':'35px'},
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
