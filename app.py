from flask import render_template,Flask,request
import numpy as np
import pandas as pd
from sklearn import metrics
import pickle
from sklearn.preprocessing import MinMaxScaler
app=Flask(__name__)
df = pd.read_csv("toy3.csv")

lst=[i for i in df['state']]

d = {ni: indi for indi, ni in enumerate(set(lst))}
print(d)
numbers = [d[ni] for ni in lst]

df['state']=numbers


df["Age"] = [int(str(i).replace("-", "")) for i in df["Age"]]

df["money"] = [int(float(str(i).replace(",", ""))) for i in df["money"]]

cat_col = df.select_dtypes(exclude=np.number)

numerical_col = df.select_dtypes(include=np.number)

one_hot_categorical_variables = pd.get_dummies(cat_col)


df = pd.concat([numerical_col,one_hot_categorical_variables],sort=False,axis=1)
x = df.drop(columns='state')
y =df["state"]



from sklearn.preprocessing import StandardScaler
from sklearn.preprocessing import RobustScaler
sc = MinMaxScaler()

from sklearn.model_selection import train_test_split
x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.2, random_state=12)
X_train = sc.fit_transform(x_train)
X_test = sc.transform(x_test)

@app.route("/img", methods=["GET", "POST"])
def model():
    filename = 'finalized_model.sav'
    loaded_model = pickle.load(open(filename, 'rb'))
    if request.method == "POST":
        result = request.form
        lst =   {
                'Age':int(result["age"]),
                'Gender':result["gender"],
                'Occupation':result["Occuption"],
                'Marital_status':result['marital'],
                'count':int(result["Number"]),
                'days':int(result["Average"]),
                'money':int(result["Money"]),
                'Mode of travel':result["Transport"]
        }
        lst1={'Gender_Female':0,'Gender_Male':0,'Occupation_Employed':0,'Occupation_Home Maker':0,	'Occupation_Other':0,	'Occupation_Retired':0,	'Occupation_Student':0,	'Marital_status_Married':0,'Marital_status_Unmarried':0,	'Mode of travel_Airways':0,	'Mode of travel_Railways':0,	'Mode of travel_Roadways':0}
        print(lst)
        df = pd.DataFrame(lst,index=[0])
        print(df)
        cat_col = df.select_dtypes(exclude=np.number)
        print(cat_col)
        numerical_col = df.select_dtypes(include=np.number)
        print(numerical_col)
        one_hot_categorical_variables = pd.get_dummies(cat_col)
        print(one_hot_categorical_variables)
        df = pd.concat([numerical_col,one_hot_categorical_variables],sort=False,axis=1)
        print(df)
        dict1=df.to_dict('list')
        # val=set(df.columns)
        # sd=lst1.union(val)
        # final=lst1.difference(val)
        # final=list(final)
        # for i in final:
        #     dict1[i]=0
        # print(dict1)
        
        for key in lst1:
            for k in dict1:
                if k == key:
                    lst1[key]=dict1[k]

        print(lst1)

        # # values = dict1.values()
        # # values_list = list(values)
        df1 = pd.DataFrame(lst1,index=[0])
        df = pd.concat([numerical_col,df1],sort=False,axis=1)
        print(df)
        # cur_row =[]
        
            
            
        # # iterate over all the columns
        # for j in range(df.shape[1]):
            
        #     # append the data of each
        #     # column to the list
        #     cur_row.append(df.iat[0, j])
        df_list = df.values
        # cur_row=[cur_row]
        # print(cur_row)
        X_test = sc.transform(df_list)
       
        print(X_test)
        # arr=df.to_numpy()
        # print(arr)
        state=loaded_model.predict(X_test)
        for i in d:
            if state == d[i]:
                state1=i
    return render_template('hi.html',state1=state1)

@app.route("/")  
def form():
    return render_template("form.html")
@app.route('/login.php')
def login():
    return render_template('login.php')

@app.route('/Signup.php')
def signup():
    return render_template('Signup.php')
    
@app.route('/states.html')
def states():
    return render_template('states.html')
    
@app.route('/welcome to maharashtra.php')
def wel():
    return render_template('welcome to maharashtra.php')
    


if __name__ == "__main__":
    app.run(debug=True,port=8080)