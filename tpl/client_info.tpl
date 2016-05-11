
{$source} Enquiry - {$uid}

From: {$email}
Referrer: {$previousenquiries}
Enquiry Type: {$type}


Contact Details:
{if $groupname != ''}
Group name: {$groupname}
{/if}
Name: {$firstname} {$lastname}
Daytime Number: {$phone}
{if $phone2 != ''} / {$phone2}{/if}
Email Address: {$email}
Contact method: {$contact_method}


Insurance Details:
Nationality: {$nationality}
Country in which you require coverage: {$countryofcover}
Country where you now live: {$countryofenquiry}
Length of Coverage: {$lengthofcover}
{if $outpatient != ''}
I require hospitalization benefits as well as outpatient benefits
{/if}
{if $dental != ''}
I require dental coverage
{/if}
{if $maternity != ''}
I require maternity coverage
{/if}


Insured Details:
Person(s):
{foreach key=k item=person from=$Everyone}
Person {$k+1}:
Name: {$person.name}
Birth Date: {$person.dateofbirth}
Age: {$person.age}
Gender: {$person.gender}
Occupation: {$person.occupation}

{/foreach}

Comments:
{$comments}


