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
import { useBlockProps, RichText, InnerBlocks, MediaUpload, __experimentalLinkControl as LinkControl, } from '@wordpress/block-editor';
import { Panel, PanelBody, PanelRow, Button, } from '@wordpress/components';

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
export default function Edit({ attributes, setAttributes }) {

	const ALLOWED_MEDIA_TYPES = ['image'];
	const ALLOWED_BLOCKS = ['core/paragraph', 'core/list', 'core/heading'];
	const TEMPLATE = [
		['core/heading', { className: 'card-title', level: 1, placeholder: 'Write your Title' }],
		['core/paragraph', { className: 'card-text', placeholder: 'Write your text' }]
	];

	const bodyTitle = 'My Block Settings';

	return (
		<div {...useBlockProps()}>
			<Panel header="Hero Image Block">
				<PanelBody title={bodyTitle} initialOpen={true}>
					<PanelRow>
						<InnerBlocks
							allowedBlocks={ALLOWED_BLOCKS}
							template={TEMPLATE}
						/>
					</PanelRow>
				</PanelBody>
				<PanelBody title="Image" initialOpen={true}>
					<PanelRow>
						<MediaUpload
							onSelect={(media) => {
								console.log('selected ' + media.length);
								console.table(media);
								setAttributes({
									media,
								});
							}}
							allowedTypes={ALLOWED_MEDIA_TYPES}
							render={({ open }) => (
								<PanelRow className="media" initialOpen={true}>
									<Button onClick={open}>
										{typeof attributes.media.url ==
											'undefined' ||
											attributes.media.url == '' ? (
											'Open Media Library'
										) : (
											<img src={attributes.media.url} />
										)}
									</Button>
								</PanelRow>
							)}
						/>
					</PanelRow>
				</PanelBody>
				<PanelBody title={'Button Configuration'} initialOpen={true}>
					<PanelRow>
						<RichText
							tagName="a"
							className="btn btn-secondary rounded-0 text-white fw-bold"
							value={ attributes.text_btn }
							onChange={ ( newVal ) => {
								setAttributes( { text_btn: newVal } );
							} }
							placeholder="The Text of the Button Goes Here"
						/>
						<LinkControl
							searchInputPlaceholder="Search here..."
							value={attributes.post}
							settings={[
								{
									id: 'opensInNewTab',
									title: 'Open in new tab',
								},
							]}
							onChange={(newPost) => {
								console.log(
									`The selected item URL: ${newPost.url}.`
								);
								setAttributes({
									post: newPost,
								});
							}}
							withCreateSuggestion={true}
							createSuggestion={(inputValue) =>
								setAttributes({
									post: {
										...attributes.post,
										title: inputValue,
										type: 'custom-url',
										id: Date.now(),
										url: inputValue,
									},
								})
							}
							createSuggestionButtonText={(newValue) =>
								`${__('New:')} ${newValue}`
							}
						></LinkControl>
					</PanelRow>
				</PanelBody>
			</Panel>
		</div>
	);
}