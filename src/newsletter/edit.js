/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InnerBlocks, } from '@wordpress/block-editor';
import { Panel, PanelBody, PanelRow } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({attributes, setAttributes}) {

	const ALLOWED_BLOCKS = [ 'core/paragraph', 'core/list', 'core/heading' ];
	const TEMPLATE = [ 
		[ 'core/heading', {className: 'text-secondary text-uppercase', placeholder: 'Write your title'} ],
		[ 'core/paragraph', {className: 'text-white py-24', placeholder: 'Write your text.'} ] 
	];
	
	const bodyTitle = 'My Block Settings';
	const opened = true;

	return (
		<div { ...useBlockProps() }>
			<Panel header="Newsletter">
				<PanelBody title={ bodyTitle } initialOpen={ opened }>
					<PanelRow>
						{ __( 'Newsletter – you can check the suscriptors in the admin panel', 'dude-test' ) }
					</PanelRow>
				</PanelBody>
				<PanelBody title={ 'Title & Text' } initialOpen={ opened }>
					<PanelRow className='bg-info'>
						<InnerBlocks
							allowedBlocks={ ALLOWED_BLOCKS }
							template={ TEMPLATE }
						/>
					</PanelRow>
				</PanelBody>
			</Panel>
		</div>
	);
}
