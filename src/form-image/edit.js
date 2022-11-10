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
import { useBlockProps, RichText, MediaUpload } from '@wordpress/block-editor';
import { Panel, PanelBody, PanelRow, Button } from '@wordpress/components';

const ALLOWED_MEDIA_TYPES = [ 'image' ];

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
			<Panel header="Form Image">
				<PanelBody title="Title" initialOpen={ false }>
					<RichText
						tagName="h2"
						className=""
						value={ attributes.title }
						onChange={ ( newVal ) => {
							setAttributes( { title: newVal } );
						} }
						placeholder="The Text of the Title Goes Here"
					/>
				</PanelBody>
				<PanelBody title="Image" initialOpen={ false }>
					<MediaUpload
						onSelect={ ( media ) => {
							console.log( 'selected ' + media.length );
							console.table( media );
							setAttributes( {
								media,
							} );
						} }
						allowedTypes={ ALLOWED_MEDIA_TYPES }
						render={ ( { open } ) => (
							<PanelRow className="media" initialOpen={ false }>
								<Button onClick={ open }>
									{ typeof attributes.media.url ==
										'undefined' ||
									attributes.media.url == '' ? (
										'Open Media Library'
									) : (
										<img src={ attributes.media.url } />
									) }
								</Button>
							</PanelRow>
						) }
					/>
				</PanelBody>
			</Panel>
		</div>
	);
}
