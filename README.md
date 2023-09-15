This plugins provides full set of functionality (hope so) to work with Adjacent Posts (Previous and Next posts) in JetEngine. Here is a full list and short description of this functionality

## Elementor Dynamic Tags

**Prev Post URL/Next Post URL** - returns URL of previous and next post for current Post object

![image](https://user-images.githubusercontent.com/4987981/194930093-d191c44f-f3a3-4955-9b44-81821fbbd829.png)

**Prev Post Title/Next Post Title** - return title of previous and next post for current Post object

![image](https://user-images.githubusercontent.com/4987981/194930216-0a39bf90-646e-46c5-b5b4-98e913330013.png)

## JetEngine Macros

**Prev Post ID/Next Post ID** - macros to get Previous or Next post ID. Could be used in query builder to get Previous or Next post by ID. Then you can output any data related to these posts with JetEngine Listing Grid

<img width="694" alt="image" src="https://github.com/Crocoblock/jet-engine-adjacent-posts-tags/assets/4987981/6f09719b-1bcb-4cb2-aead-008ccdf6a80c">

## JetEgine Context

**Previous Post Object/Next Post Object** - could be used anywhere in Context option to change Current Object to Previous or Next post for current post. For example wth help of this you can add Prev/Next post links directly into single post template, without using additional query and listing.

<img width="503" alt="image" src="https://github.com/Crocoblock/jet-engine-adjacent-posts-tags/assets/4987981/c4d9ac41-23a5-4442-964f-38207bbf1e15">

## JetEngine Conditions

**Has Previous Post/Has Next Post** - conditions used to check if Current post has adjacent posts. These conditions should be used inside single post template or single post page (or inside listing, but only if you need detect have you pre/next posts or not for __current listing item__, not the global post object)

<img width="279" alt="image" src="https://github.com/Crocoblock/jet-engine-adjacent-posts-tags/assets/4987981/bbc0a1ec-baf6-4123-80c4-7f179ea5ace0">
