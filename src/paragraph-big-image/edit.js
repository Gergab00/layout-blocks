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
import {
	useBlockProps,
	RichText,
	InnerBlocks,
	MediaUpload,
	__experimentalLinkControl as LinkControl,
} from '@wordpress/block-editor';
import {
	Panel,
	PanelBody,
	PanelRow,
	Button,
	BaseControl,
} from '@wordpress/components';

const ALLOWED_MEDIA_TYPES = [ 'image' ];
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
			<Panel header="Paragraph with Big Image">
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
				<PanelBody title="Image Mobile" initialOpen={ false }>
					<MediaUpload
						onSelect={ ( media_mobile ) => {
							console.log( 'selected ' + media_mobile.length );
							console.table( media_mobile );
							setAttributes( {
								media_mobile,
							} );
						} }
						allowedTypes={ ALLOWED_MEDIA_TYPES }
						render={ ( { open } ) => (
							<PanelRow className="media" initialOpen={ false }>
								<Button onClick={ open }>
									{ typeof attributes.media_mobile.url ==
										'undefined' ||
									attributes.media_mobile.url == '' ? (
										'Open Media Library'
									) : (
										<img
											src={ attributes.media_mobile.url }
										/>
									) }
								</Button>
							</PanelRow>
						) }
					/>
				</PanelBody>
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
				<PanelBody title="Button" initialOpen={ false }>
					<RichText
						tagName="a"
						className="btn btn-shade-cyan"
						value={ attributes.text_btn }
						onChange={ ( newVal ) => {
							setAttributes( { text_btn: newVal } );
						} }
						placeholder="The Text of the Button Goes Here"
					/>
					<BaseControl
						__nextHasNoMarginBottom
						label="Configure the link and the opening of the button"
						help="Use this option to enable the opening of a popup, in the HREF you will have to put the ID of the element to open"
					>
						<LinkControl
							searchInputPlaceholder="Search here..."
							value={ attributes.post }
							settings={ [
								{
									id: 'opensInNewTab',
									title: 'Open in new tab',
								},
							] }
							onChange={ ( newPost ) => {
								console.log(
									`The selected item URL: ${ newPost.url }.`
								);
								setAttributes( {
									post: newPost,
								} );
							} }
							withCreateSuggestion={ true }
							createSuggestion={ ( inputValue ) =>
								setAttributes( {
									post: {
										...attributes.post,
										title: inputValue,
										type: 'custom-url',
										id: Date.now(),
										url: inputValue,
									},
								} )
							}
							createSuggestionButtonText={ ( newValue ) =>
								`${ __( 'New:' ) } ${ newValue }`
							}
						></LinkControl>
					</BaseControl>
				</PanelBody>
			</Panel>
		</div>
	);
}
