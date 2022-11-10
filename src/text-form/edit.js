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
import { useBlockProps, RichText, InnerBlocks } from '@wordpress/block-editor';
import { Panel, PanelBody, PanelRow } from '@wordpress/components';
const ALLOWED_BLOCKS = [ 'core/paragraph', 'core/list', 'core/heading' ];
const TEMPLATE = [ [ 'core/paragraph', {} ] ];

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
export default function Edit( { attributes, setAttributes } ) {
	return (
		<div { ...useBlockProps() }>
			<Panel header="Text Form">
				<PanelBody title="Title and paragraph" initialOpen={ false }>
					<RichText
						tagName="h2"
						className="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-130p lh-md-120 lh-30"
						value={ attributes.title }
						onChange={ ( newVal ) => {
							setAttributes( { title: newVal } );
						} }
						placeholder="The Text of the Title Goes Here"
					/>
					<InnerBlocks
						allowedBlocks={ ALLOWED_BLOCKS }
						template={ TEMPLATE }
					/>
				</PanelBody>
				<PanelBody title="Button and title form" initialOpen={ false }>
					<RichText
						tagName="h4"
						className="font-commissionerbold fst-italic fw-bold fs-md-52 fs-sm-35 fs-28 lh-md-130p lh-md-120 lh-30"
						value={ attributes.form_title }
						onChange={ ( newVal ) => {
							setAttributes( { form_title: newVal } );
						} }
						placeholder="The Title of the form Goes Here"
					/>
					<RichText
						tagName="a"
						className="btn btn-dark-shade-gray "
						value={ attributes.text_btn }
						onChange={ ( newVal ) => {
							setAttributes( { text_btn: newVal } );
						} }
						placeholder="The Text of the Button Goes Here"
					/>
				</PanelBody>
			</Panel>
		</div>
	);
}
