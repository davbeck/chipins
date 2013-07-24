# chipins

A Wordpress plugin that adds a short code to show giving progress with a link to give using [The City](http://www.onthecity.org).

![Chipins Screenshot](http://f.cl.ly/items/1B0l1L0p1k301i2f1n3F/Screen%20Shot%202013-07-24%20at%201.50.46%20PM.png)

## Installation

- Copy the entire folder into `wp-content/plugins`.
- In `wp-admin`, select "Plugins" on the left and then click "Activate" under "Chipins".

## Usage

In any page or blog post body you can use the `chipins` short code like so:

    Give to use please:
    
    [chipins name="Toilet Seats" total="1000" raised="149.28" campus_id="32316" fund_id="10549"]
    
    [chipins name="Sound Equipment" total="1000000" raised="5549.8" campus_id="32316" fund_id="10549"]
    
    [chipins name="Chairs" total="4300" raised="4300.00" campus_id="32316" fund_id="10549" description="We sit in these. We need one for each person. Well, more than one; People don't like to sit next to each other."]
    
    [chipins name="Toys" total="500" raised="800" campus_id="32316" fund_id="10549"]
    
    [chipins name="Doors" total="200"]

### Options:

- **name**, *required*: The name of the designation. Used as the memo field when the someone gives with the link.
- **total**, *required*: The total you are trying to raise for that designation. Don't include the dollar sign. Decimal points optional. Used to calculate the percent raised.
- **raised**, *optional*: The amount already raised. Same format as total. If not included, this is assumed to be 0.
- **campus_id**, *optional*: The campus id in The City. When this is provided the campus will be auto selected on The City giving page. The user can change this on the giving page.
- **fund_id**, *optional*: The fund id in The City. When this is provided the fund will be auto selected on The City giving page. The user can change this on the giving page.
- **suggested_amount**, *optional*: A suggested amount that will be auto filled on the giving page. The user can change this on the giving page.
- **description**, *optional*: A description to display with the progress.
