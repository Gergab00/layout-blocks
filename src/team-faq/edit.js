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
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
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

	const ALLOWED_BLOCKS = ['core/paragraph', 'core/list', 'core/heading'];
	const TEMPLATE = [
		['core/heading', { className: 'text-dark fw-bold fs-34 text-center', level: 1, placeholder: 'Write your Title' }],
		['core/paragraph', { className: 'text-black text-center', placeholder: 'Write your text' }]
	];

	const bodyTitle = 'My Block Settings';
	const opened = true;

	return (
		<div { ...useBlockProps() }>
			<Panel header="Team and FAQ">
				<PanelBody title={ bodyTitle } opened={ opened }>
					<PanelRow>
						{ __( 'For add Testimonials or FAQ, go to the admin section.', 'understrap-framework-theme' ) }
					</PanelRow>
					<PanelRow>
						<InnerBlocks
							allowedBlocks={ALLOWED_BLOCKS}
							template={TEMPLATE}
						/>
					</PanelRow>
				</PanelBody>
			</Panel>
		</div>
	);
}